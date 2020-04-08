<?php
$host = 'localhost'; // адрес сервера
$database = 'id13191462_soap'; // имя базы данных
$user = 'id13191462_kslavovich'; // имя пользователя
$password = '9Z}lGh(lq?SDKo\/'; // пароль
// подключаемся к серверу

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

$name=  $_POST['name'];
$email= $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$sqli = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password1')";
if (mysqli_query($link, $sqli)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sqli . "<br>" . mysqli_error($link);
}
mysqli_close($link);
?>
<SCRIPT>
someTimeout = 1500; // редирект через 1.5 секунды
window.setTimeout("document.location = 'https://inf2-2b-kokhov.000webhostapp.com/index.html';", someTimeout);
</SCRIPT>




