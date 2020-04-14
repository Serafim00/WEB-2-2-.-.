$host = 'localhost'; // адрес сервера
$database = 'id13191462_soap'; // имя базы данных
$user = 'id13191462_kslavovich'; // имя пользователя
$password = '9Z}lGh(lq?SDKo\/'; // пароль
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
