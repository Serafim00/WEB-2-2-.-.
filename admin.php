<?php
$link=mysqli_connect('localhost', 'root', '', 'userlistdb')
	or die("Ошибка " . mysqli_error($link)); 

$query ="SELECT * FROM `users` WHERE id='4'";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
while($row = mysqli_fetch_array($result)){


    $id=$row['id'];
    $login=$row['login'];
    
 
    echo "<p> $id - $login </p>";
    }
mysqli_close($link);

     
?>
