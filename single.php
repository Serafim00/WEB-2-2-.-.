



<!DOCTYPE html>
<html>
<head>
	<?php
	session_start(); 
	?>
<title>KSlavovich</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />


<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>


<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-48014931-1', 'codyhouse.co');
  	ga('send', 'pageview');

  	jQuery(document).ready(function($){
  		$('.close-carbon-adv').on('click', function(){
  			$('#carbonads-container').hide();
  		});
  	});
</script>

	<script>
		fetch("./header.php")
				.then(response => {
					return response.text()
				})
				.then(data => {
					document.querySelector("header").innerHTML = data;
				});

		fetch("./footer.html")
				.then(response => {
					return response.text()
				})
				.then(data => {
					document.querySelector("footer").innerHTML = data;
				});
	</script>

<script src="js/simpleCart.min.js"> </script>
</head>
<body> 
<header></header>
<div class="container">
	<h6 class="dress"><a href="product.php">Меню</a> <i> </i> Страница товара </h6>
</div>
<div class="back">
	<h2>СТРАНИЦА ТОВАРА</h2>
</div>
		
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">

				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">Категории</h3>
					</div>
		 <ul class="menu">
		<li class="item1"><a href="#">1 </a>
			<ul class="cute">
				<li class="subitem1"><a href="#">1.1 </a></li>
				<li class="subitem2"><a href="#">1.2 </a></li>
				<li class="subitem3"><a href="#">1.3 </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">2 </a>
			<ul class="cute">
				<li class="subitem1"><a href="#">2.1 </a></li>
				<li class="subitem2"><a href="#">2.2 </a></li>
				<li class="subitem3"><a href="#">2.3 </a></li>
			</ul>
		</li>
	</ul>
					</div>

		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });

			});
		</script>

	

<div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">Лучшая цена</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="images/be.jpg" alt=""></a>

								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="#" >1</a></h6>

								<span class=" price-in1">40.00 ₽</span>
							</div>

							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="images/be1.jpg" alt=""></a>

								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="#" >2</a></h6>

								<span class=" price-in1">40.00 ₽</span>
							</div>

							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="images/be2.jpg" alt=""></a>

								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="#" >3 </a></h6>
								
								<span class=" price-in1"><small>70.00 Р </small>40.00 ₽</span>
							</div>

							<div class="clearfix"> </div>
							</div>
				</div>
				<div class=" per1">
			</div>
		</div>

				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">
					<?php
					$data = $_POST;

					$link=mysqli_connect('localhost', 'root', '', 'userlistdb')
						or die("Ошибка " . mysqli_error($link)); 
					
					$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
					
					$n = $_GET['id'];

 				    
					$query ="SELECT * FROM `products` WHERE id='$n'";

					$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
					while($row = mysqli_fetch_array($result)){


					    	$id=$row['id'];
					    	$name=$row['name'];
					    	$price=$row['price'];
					    	$description=$row['description'];
					 		$img=$row['image'];
				    }
				    
					  
					?>
					<img style="height: 300px; width: 270px" src="/images/<?php echo "$img"?>">

					</div>

					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4><?php echo "<p>$name </p>"?></h4>
							<div class="star-on">
								<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
								<div class="review">
									
								</div>
							<div class="clearfix"> </div>
							</div>

							<h5 class="item_price"><?php echo "<p>$price ₽</p>"?></h5>
							<p><?php echo "<p>$description </p>"?></p>
							<div class="available">
							<!--	<ul>
									<li>Выбор параметра
										<select>
										<option>Параметр1</option>
										<option>Параметр2</option>
										<option>Параметр3</option>
									</select></li>
								<div class="clearfix"> </div>
							</ul>-->
						</div>
							
								<a href="#" class="add-cart item_add">Купить</a>

						</div>
					</div>
				</li>

				<div class="clearfix"> </div>
				<a class="add-re" href="contact.html">Написать нам</a>
			</div>

</li>
<div class="clearfix"></div>
	</ul>
</div>


		        		   		     		</div></a>
		        	</div>
	   		     	<div class="clearfix"> </div>
		        	</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<footer></footer>
<!--подключить footer-->
</body>
</html>