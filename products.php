<?php 
  
    if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
        $id=intval($_GET['id']); 
          
        if(isset($_SESSION['cart'][$id])){ 
              
            $_SESSION['cart'][$id]['quantity']++; 
              
        }else{ 
                        $link=mysqli_connect('localhost', 'root', '', 'userlistdb')
                        or die("Ошибка " . mysqli_error($link)); 
            $sql_s="SELECT * FROM products WHERE id={$id}"; 
            $query_s=mysqli_query($link, $sql_s); 
            if(mysqli_num_rows($query_s)!=0){ 
                $row_s=mysqli_fetch_array($query_s); 
                  
                $_SESSION['cart'][$row_s['id']]=array( 
                        "quantity" => 1, 
                        "price" => $row_s['price'] 
                    ); 
                  
                  
            }else{ 
                  
                $message="This product id it's invalid!"; 
                  
            } 
              
        } 
          
    } 
  
?> 

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

</head>
<body> 

<header></header>
<div class="container">
    <h6 class="dress"><a href="index.php">Главная</a> <i> </i> Мыло </h6>
</div>
<div class="back">
    <h2>КАТАЛОГ</h2>
</div>

        <div class="product">
            <div class="container">
                <div class="col-md-3 product-price">
                      <div class="price-grid">
                        <div class="of-left">
                        
                    </div>
      <ul class="dropdown-menu1">
     </div>
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
                                    <a href="single.php"><img class="img-responsive " src="images/4.jpg" alt=""></a>

                                </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="#" >1</a></h6>

                                <span class=" price-in1">40.00 ₽</span>
                            </div>

                            <div class="clearfix"> </div>
                            </div>
                            <div class="product-go">
                        <div class=" fashion-grid">
                                    <a href="single.php"><img class="img-responsive " src="images/4.jpg" alt=""></a>

                                </div>
                            <div class="fashion-grid1">
                                <h6 class="best2"><a href="#" >2</a></h6>

                                <span class=" price-in1">40.00 ₽</span>
                            </div>

                            <div class="clearfix"> </div>
                            </div>
                            <div class="product-go">
                        <div class=" fashion-grid">
                                    <a href="single.php"><img class="img-responsive " src="images/4.jpg" alt=""></a>

                                </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="#" >3 </a></h6>
                                
                                <span class=" price-in1"><small>70.00 ₽</small>40.00 Р</span>
                            </div>

                            <div class="clearfix"> </div>
                            </div>
                </div>
<div class=" per1">
                
            </div>
                </div>
<?php 
        if(isset($message)){ 
            echo "<h2>$message</h2>"; 
        } 
    ?> 







                <div class="col-md-9 product-price1">
                    <div class="mens-toolbar">

                        <?php
                                $link=mysqli_connect('localhost', 'root', '', 'userlistdb')
                        or die("Ошибка " . mysqli_error($link)); 
                    $query ="SELECT * FROM `products` WHERE id='4'";

                    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
                    while($row = mysqli_fetch_array($result)){


                            $id=$row['id'];
                            $name=$row['name'];
                            $price=$row['price'];
                            $description=$row['description'];
                            $img=$row['image'];
                    }
                      
                    ?>
                                             <div class="sort">
                        
                     </div>

                    <div class="clearfix"></div>
                </div>
                <div class="product-right-top">
                    <div class="top-product">

<?php 
            $link=mysqli_connect('localhost', 'root', '', 'userlistdb')
                        or die("Ошибка " . mysqli_error($link)); 
          
            $query="SELECT * FROM products"; 
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)){
?> 
            <ul> 
                <li><?php echo $row['name'] ?></li> 
                <li><?php echo $row['description'] ?></li> 
                <li><?php echo $row['price'] ?>$</li> 
                <li><a href="index1.php?page=products&action=add&id=<?php echo $row['id'] ?>">Add to cart</a></li> 
            </ul> 
        <?php 
           }       
          
          
        ?> 


                        <?php
$data = $_POST;
$link=mysqli_connect('localhost', 'root', '', 'userlistdb')
or die("Ошибка " . mysqli_error($link)); 
            
$sql_select = "SELECT * FROM products ";
$result = mysqli_query($link, $sql_select);
            
$row = mysqli_fetch_array($result);
do
{
            $id=$row['id'];
            $name=$row['name'];
            $price=$row['price'];
            $description=$row['description'];
            $img=$row['image'];
                    
  $_SESSION['id'] = 4; 
    printf("<form action='single.php' method='POST'>
        <div class='col-md-4 chain-grid  simpleCart_shelfItem'>
                            <div class='grid-span-1'>
                                <a  href='single.php?id=$id'><img class='img-responsive' style='height: 100px; width: 100px' src='/images/$img ' alt=''>
                                <div class='link'>
                                <ul >
                                            <li><i> </i></li>
                                            <li><i class='white1'> </i></li>
                                </ul>
                            </div>
                            </a>
                        </div>
                            <div class='grid-chain-bottom ''>
                                <h8><a href='single.php?id=$id'><php echo '<p>$name </p></a></h8>
                                <div class='star-price'>
                                    <div class='price-at'>
                                                                            </div>
                                        <div class='price-at-bottom '>
                                            <span class='item_price'><php echo '<p>$price ₽</p></span>
                                        </div>
                                    <div class='clearfix'> </div>
                                </div>
                                <div class='cart-add'>
                                    <a class='add1 item_add' href='index1.php?page=products&action=add&id=['id']' >Добавить в корзину <i> </i></a>
                                    <a class='add2' href=''><i> </i></a>
                                    <div class='clearfix'> </div>
                                </div>
                            </div>
                        </div>
                     </form>"




);

}
while($row = mysqli_fetch_array($result));
         ?>
              
                    <div class="clearfix"> </div>

           <!--     <ul class="start">
                    <li><a href="#"><i> </i></a></li>
                    <li><span>1</span></li>
                    <li class="arrow"><a href="#">2</a></li>
                    <li class="arrow"><a href="#">3</a></li>


                    <li><a href="#"><i class="next"> </i></a></li>
                </ul>-->
                <div class="clearfix"> </div>
                </div>

            <div class="clearfix"> </div>

                <div class="shipping">
                    <div class="col-md-3 col-md1">

            <div class="clearfix"> </div>
            </div>

                </div>


<!---->
<footer></footer>
<script src="js/simpleCart.min.js"> </script>
<!--подключить footer-->
</body>
</html>