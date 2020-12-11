</div>
   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Thông tin</h4>
						<ul>
						<li><a href="#">Về chúng tôi</a></li>
						<li><a href="#">Dịch vụ</a></li>
						<li><a href="#"><span>Tìm dịch vụ</span></a></li>
						
						<li><a href="#"><span>Liên hệ</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Tại sao bạn chọn chúng tôi</h4>
						<ul>
						<li><a href="about.html">Về chúng tôi</a></li>
						<li><a href="faq.html">Dịch vụ</a></li>
						<li><a href="#">Tìm dịch vụ</a></li>
						<li><a href="contact.html"><span>Chính sách</span></a></li>
						
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Giỏ hàng của tôi</h4>
						<ul>
							<li><a href="contact.html">Đăng nhập</a></li>
							<li><a href="index.html">Xem giỏ hàng</a></li>
							<li><a href="#">Sản phẩm yêu thích</a></li>
							<!-- <li><a href="#">Track My Order</a></li> -->
							<li><a href="faq.html">Giúp đỡ</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Liên hệ</h4>
						<ul>
							<li><span>0123456789</span></li>
							<li><span>0123456789</span></li>
						</ul>
						<div class="social-icons">
							<h4>Thêm dõi chúng tôi</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>coppy right @2020</p>
		   </div>
     </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
</body>
</html>


<!-- <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
<style>
	#wrapper, #top-bar {
		width: 100%;
    background: #F7F7F7;
    margin: 20px auto 20px auto;
    box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.2);
    /* -webkit-box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.2); */
    /*padding: 10px 10px;*/

	}
	.feature_box{
	/*margin-bottom:;*/
	/*display: flex;
	width: 100%;*/
	}
	.span4{
		/*text-align:center;*/
		/*width: 100%;*/
		/*display: block;*/
		padding: 0 25px 0 25px;
	}
	.feature_box h4{
	margin:0 0 10px 10;
	font-weight:normal;	
	}
	/*.feature_box  p{
	margin:0 0 10px 10px;
	text-align:center;
	}*/
	.feature_box img{	
	margin-bottom:10px;
	background-color:#0078D7;
	padding:25px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;	
	border-radius: 50%;
	}
	.feature_box .service{	
	margin:10px 0 10px 0;
	padding:3px;	
	text-align:center;
	}
	.feature_box .service:hover{
	background-color:#f4f4f4;
	}
	.feature_box .service:hover img{
	-webkit-transition: all 0.7s linear;
	-webkit-transform: rotate(6.28rad);
	transition: all 0.7s;
	transform: rorate(6.28rad);
	background: #23fa3a;
	}
/* end feature box */
	
</style>
   <!-- <div class="footer"> -->
   		<!-- <div id="wrapper" class="container">
			
			<div class="row feature_box">						
				<div class="span4">
					<div class="service">
						<div class="customize">	
							<img src="images/feature_img_2.png" alt="" />
							<h4>THIẾT KẾ <strong>HIỆN ĐẠI</strong></h4>
							<p>Các sản phẩm được thiết kế theo mẫu mã hiện đại, thời thượng phù hợp với xu hướng người dùng hiện nay.</p>
						</div>
					</div>
				</div>
				<div class="span4">	
					<div class="service">
						<div class="customize">			
							<img src="images/feature_img_1.png" alt="" />
							<h4>GIAO HÀNG <strong>MIỄN PHÍ</strong></h4>
							<p>Sản phầm được giao hàng nhanh, gọn bằng nhiều hình thức nhằm đáp ứng tốt yêu cầu của khách hàng.</p>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="service">
						<div class="customize">	
							<img src="images/feature_img_3.png" alt="" />
							<h4>PHỤC VỤ <strong>24/7</strong></h4>
							<p>Khách hàng luôn là ưu tiên hàng đầu và được phục vụ 24/7.</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->
    <!-- </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
 --> -->