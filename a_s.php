<?php
$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];

echo $name, $price;

$link=mysqli_connect('localhost', 'root', '', 'demo');

$imagename=$_FILES["myimage"]["name"];

//Получаем содержимое изображения и добавляем к нему слеш
$imagetmp=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));

//Вставляем имя изображения и содержимое изображения в image_table
$query="INSERT INTO products VALUES('','','$name','$description','$price','$imagetmp','$imagename')";

					$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); /**

					

					
					    	$name=$_POST['name'];
					    	$price=$_POST['price'];
					    	$description=$_POST['description'];
					 		$img=$_POST['image'];


					$link=mysqli_connect('localhost', 'root', '', 'userlistdb')
						or die("Ошибка " . mysqli_error($link)); 
					
					$query ="INSERT INTO `products`(`id`, `category_id`, `name`, `description`, `price`, `image`, `status`) VALUES ('','','$name','$description','price','$img','')	";	    
					echo 'File Uploaded'; // Оповещаем пользователя об успешной загрузке файла
					  
				?>

?>