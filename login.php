<?php 
	require 'db.php';

	$data = $_POST;
	if ( isset($data['do_login']) )
	{
		$user = R::findOne('users', 'login = ?', array($data['login']));
		if ( $user )
		{
			//логин существует
			if ( password_verify($data['password'], $user->password) )
			{
				//если пароль совпадает, то нужно авторизовать пользователя
				$_SESSION['logged_user'] = $user;
				echo '<div style="color:dreen;">Вы авторизованы!<br/> Можете перейти на <a href="/">главную</a> страницу.</div><hr>';
			
				ob_start();
				$new_url = 'http://localhost/';
				header('Location: '.$new_url);
				ob_end_flush();
				
			}else
			{
				$errors[] = 'Неверно введен пароль!';
			}

		}else
		{
			$errors[] = 'Пользователь с таким логином не найден!';
		}
		
		if ( ! empty($errors) )
		{
			//выводим ошибки авторизации
			echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
		}

	}

?>


<!--<form action="login.php" method="POST">
	<strong>Логин</strong>
	<input type="text" name="login" value="<?php echo @$data['login']; ?>"><br/>

	<strong>Пароль</strong>
	<input type="password" name="password" value="<?php echo @$data['password']; ?>"><br/>

	<button type="submit" name="do_login">Войти</button>
</form>-->
<!DOCTYPE html>
<html>
<head>
<title>KSlavovich</title>
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
	<h6 class="dress"><a href="index.php">Главная</a> <i> </i> Аккаунт </h6>
</div>
<div class="back">
	<h2>АККАУНТ</h2>
</div>

		<div class="container">
		<div class="account_grid">
			   <div class=" login-right">
			  	<h3>Авторизация пользователя</h3>
				<p>Если у Вас уже есть аккаунт, пожалуйста, войдите</p>
				<form action="login.php" method="POST">
				  <div>
					<span>Логин</span>
					<input type="text" name="login" value="<?php echo @$data['login']; ?>"><br/>

				  </div>
				  <div>
					<span>Пароль</span>
					<input type="text" name="password" value="<?php echo @$data['password']; ?>"><br/>

				  </div>
				 <!-- <a class="forgot" href="#">Забыли пароль?</a>-->
				  <input type="submit" name="do_login" value="Войти">
			    

			   </div>	
			    <div class=" login-left">
			  	 если у Вас нет аккаунта, Вы можете зарегестрироваться
				 <a class="acount-btn" href="signup.php">Зарегестрироваться</a>
			   </div>
			
			 </div>
		
			</div>


<footer></footer>
<!--подключить footer-->
</body>
</html>