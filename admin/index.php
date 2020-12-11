<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../classes/cart.php');
    include_once ($filepath.'/../classes/product.php');
    include_once ($filepath.'/../classes/customer.php');
    include_once ($filepath.'/../classes/brand.php');
    include_once ($filepath.'/../helpers/format.php');
    $product = new product();
    $customer = new customer();
    $brand = new brand();
 ?>
 <?php
    $ct = new cart();
    if(isset($_GET['shiftid'])){
        $id = $_GET['shiftid'];
        $proid = $_GET['proid'];
        $qty = $_GET['qty'];
        $time = $_GET['time'];
        $price = $_GET['price'];
        $shifted = $ct->shifted($id,$proid,$qty,$time,$price);
    }

    if(isset($_GET['delid'])){
        $id = $_GET['delid'];

        $time = $_GET['time'];
        $price = $_GET['price'];
        $del_shifted = $ct->del_shifted($id,$time,$price);
    }
 
  ?>
    <div class="grid_10">
        <div class="box round first grid">
            <h2> BẢNG ĐIỀU KHIỂN</h2>
            
<p class="right__desc"></p><div class="right__cards">
    <a class="right__card" href="productlist.php">
        <div class="right__cardTitle">Sản Phẩm</div>
        <?php 
        $count_product = $product->count_product();
            $result = $count_product->fetch_array();
            $total = $result[0];            
         ?>
        <div class="right__cardNumber"><?php echo $total ?></div>
        <div class="right__cardDesc">Xem Chi Tiết <img src="img/arrow-right.svg" alt=""></div>
    </a>
               
    <a class="right__card" href="?page=view_customers">
        <?php 
        $count_customers = $customer->count_customers();
            $result = $count_customers->fetch_array();
            $total = $result[0];            
         ?>
        <div class="right__cardTitle">Khách Hàng</div>
        <div class="right__cardNumber"><?php echo $total ?></div>
        <div class="right__cardDesc">Xem Chi Tiết <img src="img/arrow-right.svg" alt=""></div>
    </a>
    <a class="right__card" href="brandlist.php">
        <?php 
        $count_brand = $brand->count_brand();
            $result = $count_brand->fetch_array();
            $total = $result[0];            
         ?>
        <div class="right__cardTitle">Thương hiệu</div>
        <div class="right__cardNumber"><?php echo $total ?></div>
        <div class="right__cardDesc">Xem Chi Tiết <img src="img/arrow-right.svg" alt=""></div>
    </a>
    <a class="right__card" href="inbox.php">
        <?php 
        $count_cart = $ct->count_cart();
            $result = $count_cart->fetch_array();
            $total = $result[0];            
         ?>
        <div class="right__cardTitle">Đơn Hàng</div>
        <div class="right__cardNumber"><?php echo $total ?></div>
        <div class="right__cardDesc">Xem Chi Tiết <img src="img/arrow-right.svg" alt=""></div>
    </a>
</div>
                <?php 
                if (isset($shifted)) {
                    echo $shifted;
                }
                 ?> 
                <?php 
                if (isset($del_shifted)) {
                    echo $del_shifted;
                }
                 ?> 
<div class="right__table">
    <p class="right__tableTitle">Đơn hàng mới</p>
    <div class="right__tableWrapper">
          <table class="data display datatable" id="example" >
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ngày đặt</th>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Xử lý</th>
                            <th>Xem chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $ct = new cart();
                        $fm = new Format();
                        $get_inbox_cart = $ct -> get_inbox_cart_limit_5();
                        if ($get_inbox_cart) {
                            $i=0;
                            while ($result = $get_inbox_cart->fetch_assoc()) {
                                $i++;
                            
                         ?>
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td align="center"><?php echo $fm->FormatDate($result['date_order']); ?></td>
                            <td align="center"><?php echo $result['productName'] ?> </td>
                            <td align="center"><?php echo $result['quantity'] ?></td>
                            <td align="center"><?php echo $result['price'].' VNĐ' ?></td>
                            <td align="center"><?php echo $result['customer_id'] ?></td>
                            <td align="center"><a href="customer.php?customerid=<?php echo $result['customer_id'] ?>">Xem khách hàng</a></td>
                            <td align="center">
                                <?php 
                                if($result['status']==0){
                                 ?>

                                <a href="?shiftid=<?php echo $result['id'] ?>&qty=<?php echo $result['quantity'] ?>&proid=<?php echo $result['productId'] ?>&price=<?php echo $result['price']; ?>&time=<?php echo $result['date_order'] ?>">Đang chờ xử lý
                                <?php 
                                }elseif($result['status']==1) {
                                 ?>

                                <?php 
                                echo 'Đang giao hàng...';
                                 ?>
                                 
                                <?php 
                                }elseif($result['status']==2) {

                                 ?>
                                <a href="?delid=<?php echo $result['id'] ?>&price=<?php echo $result['price']; ?>&time=<?php echo $result['date_order'] ?>">Xóa đơn</a>
                                 <?php 
                                }
                                 ?>
                            </td>
                            <td align="center"><a href="inhd.php?customerid=<?php echo $result['customer_id'] ?> "target="_blank">Xuất hoá đơn</a></td>
                        </tr>
                        <?php 
                        }
                        }
                         ?>
                    </tbody>
                </table>
     </div>
    <a href="inbox.php" class="right__tableMore"><p>Xem tất cả các đơn đặt hàng</p> <img src="img/arrow-right-black.svg" alt=""></a>
                       
               
         </div>
 </div>

<?php include 'inc/footer.php';?>