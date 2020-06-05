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
	<h6 class="dress"><a href="index.php">Главная</a> <i> </i> Страница товара </h6>
</div>
<div class="back">
	<h2>ДОБАВЛЕНИЕ ТОВАРА</h2>
</div>
		
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
				<div class=" per1">
			</div>
		</div>

				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">
					<img style="height: 300px; width: 270px" src="/images/4.png">
					<h5>Картинка</h5>
					<form method="POST"action="/a_s.php"enctype="multipart/form-data">
					<input type="file"name="myimage">
					

					<!--<input class="input" id="image" name="image" size="32"   type="text" value=""></label></p>-->

					</div>

					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4>Название</h4>
						 <input class="input" id="name" name="name"size="32"  type="text" value=""></label></p>
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

							<h5 class="item_price" style="border-bottom: none;">Цена</h5>
							<input class="input" id="price" name="price" size="32"type="text" value=""></label></p>
							<p>Описание товара</p>
							<textarea  class="input" name="description" cols="60" rows="10" placeholder="Введите сообщение"></textarea>
						<!--	<input class="input" id="description" name="description"size="500" type="text" value=""style="height:250px; width: 250px"></label></p>-->
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
								<input type="submit"name="submit_image"value="Сохранить">
								<!--<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Сохранить"></p>-->

						</div>
					</div>
				</li>

	</form>
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

</body>
</html>


