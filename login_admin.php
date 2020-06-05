<?php 
	require 'db.php';

	$data = $_POST;

	function captcha_show(){
		$questions = array(
			1 => 'Столица России',
			2 => 'Столица США',
			3 => '2 + 3',
			4 => '15 + 14',
			5 => '45 - 10',
			6 => '33 - 3'
		);
		$num = mt_rand( 1, count($questions) );
		$_SESSION['captcha'] = $num;
		echo $questions[$num];
	}

	//если кликнули на button
	if ( isset($data['do_signup']) )
	{
    // проверка формы на пустоту полей
		$errors = array();
		if ( trim($data['login']) == '' )
		{
			$errors[] = 'Введите логин';
		}


		if ( $data['password'] == '' )
		{
			$errors[] = 'Введите пароль';
		}


		//проверка на существование одинакового логина
		if ( R::count('users', "login = ?", array($data['login'])) > 0)
		{
			$errors[] = 'Пользователь с таким логином уже существует!';
		}
    
		//проверка капчи
		$answers = array(
			1 => 'москва',
			2 => 'вашингтон',
			3 => '5',
			4 => '29',
			5 => '35',
			6 => '30'
		);
		if ( $_SESSION['captcha'] != array_search( mb_strtolower($_POST['captcha']), $answers ) )
		{
			$errors[] = 'Ответ на вопрос указан не верно!';
		}


		if ( empty($errors) )
		{
			//ошибок нет, теперь регистрируем
			$user = R::dispense('admin');
			$user->login = $data['login'];
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT); //пароль нельзя хранить в открытом виде, мы его шифруем при помощи функции password_hash для php > 5.6
			R::store($user);
			echo '<div style="color:dreen;">Вы успешно зарегистрированы!</div><hr>';

			ob_start();
			$new_url = 'http://localhost/admin_login.php';
			header('Location: '.$new_url);
			ob_end_flush();
		}else
		{
			echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
		}

	}

?>

<!--<form action="/signup.php" method="POST">
	<strong>Ваш логин</strong>
	<input type="text" name="login" value="<?php echo @$data['login']; ?>"><br/>

	<strong>Ваш Email</strong>
	<input type="email" name="email" value="<?php echo @$data['email']; ?>"><br/>

	<strong>Ваш пароль</strong>
	<input type="password" name="password" value="<?php echo @$data['password']; ?>"><br/>

	<strong>Повторите пароль</strong>
	<input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>"><br/>

	<strong><?php captcha_show(); ?></strong>
	<input type="text" name="captcha" ><br/>

	<button type="submit" name="do_signup">Регистрация</button>
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
	<h6 class="dress"><a href="index.php">Главная</a> <i> </i> Регистрация </h6>
</div>
<div class="back">
	<h2>РЕГИСТРАЦИЯ</h2>
</div>

		<div class="container">
		<div class="register">
		<h3>Персональные данные</h3>
		  	  <form action="/login_admin.php" method="POST">


					<div class="mation">
					<div>
						<span>Имя</span>
						<input type="text" name="login" value="<?php echo @$data['login']; ?>"><br/>
					</div>
					<div>
						 <span>Ваш пароль</span>
						 <input type="text" name="password" value="<?php echo @$data['password']; ?>"><br/>
					</div>
					<span><?php captcha_show(); ?></span>
					<input type="text" name="captcha" ><br/>
					</div>
				    <input type="submit" name="do_signup" value="Регистрация">
				</form>

		   </div>
			</div>

<footer></footer>
<!--подключить footer-->
</body>
</html>