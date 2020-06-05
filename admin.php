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
<body style="background-color: #0000003b;height: 100%;">
<div class="header_a">

	<div class="header-top" >

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
	
	Приветствуем, администратор <?php echo $_SESSION['logged_user']->login; ?>!<br/></li>

<li>	<a href="logout.php">Выйти</a></li>
<?php endif ?>
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

			<li class="active grid"><a  href="admin_single.php">Мыло</a>
			<li><a  href="about.html">О нас</a>
				</li>

		 </ul>


<div class="clearfix"> </div>
					<!---->
				</div>

				
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>

	<!--<div style="background-color: white; height: 300px; width: 300px;" ></div>-->


	</div>	

			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--подключить footer-->
</body>
</html>
