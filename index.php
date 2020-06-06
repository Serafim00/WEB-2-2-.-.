
<!DOCTYPE html>
<html>
<head>
	<title>KSlavvovich</title>
	<meta lang="ru">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.min.js"></script>
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

	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default',
				width: 'auto',
				fit: true
			});
		});

	</script>

	<script src="js/simpleCart.min.js"> </script>

</head>
<body>

<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="header-top-in">

				<ul class="support">
					<li ><a href="mailto:info@example.com" ><i > </i>kslavovich@gmail.com</a></li>
					<li ><span ><i class="tele-in"> </i>8(919)963-77-80</span></li>
				</ul>
				<ul class=" support-right">
					<?php 
	require 'db.php';
?>
<li>
<?php if ( isset ($_SESSION['logged_user']) ) : ?>
	
	Приветствуем, <?php echo $_SESSION['logged_user']->login; ?>!<br/></li>

<li>	<a href="logout.php">Выйти</a></li>

<?php else : ?>
Вы не авторизованы!<br/>

<li><a href="/login.php">Войти</a></li>
<li><a href="/signup.php">Создать аккаунт</a></li>
<?php endif; ?>

					<li>
						
					</li>
				<!--	<li ><a href="account.html" ><i class="men"> </i>Войти</a></li>
					<li ><a href="account.html" ><i class="tele"> </i>Создать аккаунт</a></li>-->
				</ul>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="header-bottom">
			<div class="container">
				<div class="logo">
					<h1><a href="index.php">KSlavovich</a></h1>
				</div>
				<div class="top-nav">

		<ul class="megamenu skyblue">
			<li><a  href="contact.html">Обратная связь</a></li>
			<!--<li><a  href="index.html">Главная</a></li>-->
			<li><a  href="admin_login.php" style="color:#b1b0ad;">Админ</a>
			<li class="active grid"><a  href="product.php">Мыло</a>
			<li><a  href="about.html">О нас</a>
				</li>

		 </ul>

					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="1"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> товаров)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Корзина</a></p>
						<div class="clearfix"> </div>
					</div>

<div class="clearfix"> </div>
					<!---->
				</div>
				
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>

	<div class="banner">
		<div class="banner-top">
	         <h2>KSlavovich</h2>
	         <p>Это натуральное мыло ручной работы <span>воплощение восхитительных ароматов, позитивных эиоций
				 и истинного наслаждения</span></p>
</div>

	<div class="now">
	         <a class="morebtn" href="product.php">Купить</a>

	         <div class="clearfix"> </div>
	         </div>
 	</div>	

</div>
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="col-md-9">
				<div class="col-top">
					<div class="col-md-6 black">
						<a href="product.php"><div class="soap" >
							<h3>Мыло простое</h3>
						</div>
							<img src="images/14.jpg" width="100px" alt="" ></a>
					</div>
					<div class="col-md-6 black-in">
						<a href="product.phpl"><div class="soap bag" >
							<h3>Мыло с рисунком</h3>
						</div>
							<img src="images/11_1x.png" width="100px" alt="" ></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-top-bottom">
					<h3 class="menber">Идеальный подарок на любой праздник!</h3>
					<a href="product.php" class="now-in">Купить</a>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 per">
				<a href="product.php"><img class="img-responsive" src="https://i.pinimg.com/736x/17/cf/94/17cf9412e80398c5494ec6b1929d4faf.jpg
" alt="" >
					<div class="six">
						<h4>Распрадажа</h4>
						<p>Получи скидку до</p>
						<span>60%</span>
					</div></a>
			</div>
			<div class="clearfix"> </div>
		</div>
</div>
<!--подключить footer-->
</body>
</html>
