    <?php

    if(isset($_POST['submit'])){

        foreach($_POST['quantity'] as $key => $val) {
            if($val==0) {
                unset($_SESSION['cart'][$key]);
            }else{
                $_SESSION['cart'][$key]['quantity']=$val;
            }
        }

    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
  <title>KSlavovich</title>
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
  <h6 class="dress"><a href="product.php">Каталог</a> <i> </i> Корзина </h6>
</div>

<div class="back">
  <h2>КОРЗИНА</h2>
</div>

    <div class="product">
      <div class="container">
        <div class="col-md-3 product-price">
            
        

        <div class="product-bottom">
          <div class="of-left-in">
                <h3 class="best">ЛУЧШАЯ ЦЕНА</h3>
              </div>
          <div class="product-go">
            <div class=" fashion-grid">
                  <a href="single.html"><img class="img-responsive " src="images/be.jpg" alt=""></a>
                  
                </div>
              <div class=" fashion-grid1">
                <h6 class="best2"><a href="single.html">мыло1 </a></h6>
                
                <span class=" price-in1"> цена</span>
              </div>
                
              <div class="clearfix"> </div>
              </div>
              <div class="product-go">
            <div class=" fashion-grid">
                  <a href="single.html"><img class="img-responsive " src="images/be1.jpg" alt=""></a>
                  
                </div>
              <div class="fashion-grid1">
                <h6 class="best2"><a href="single.html">мыло2 </a></h6>
                
                <span class=" price-in1"> цена</span>
              </div>
                
              <div class="clearfix"> </div>
              </div>
              <div class="product-go">
            <div class=" fashion-grid">
                  <a href="single.html"><img class="img-responsive " src="images/be2.jpg" alt=""></a>
                  
                </div>
              <div class=" fashion-grid1">
                <h6 class="best2"><a href="single.html">мыло3 </a></h6>
                <ul class="star-footer">
                  <li><a href="#"><i> </i></a></li>
                  <li><a href="#"><i> </i></a></li>
                  <li><a href="#"><i> </i></a></li>
                  <li><a href="#"><i> </i></a></li>
                  <li><a href="#"><i> </i></a></li>
                </ul>
                <span class=" price-in1"><small>цена 1</small> цена 2</span>
              </div>
                
              <div class="clearfix"> </div>
              </div>
        </div>
    <!--  <div class=" per1">
        <a href="single.html"><img class="img-responsive" src="" alt="">
        <div class="six1">
          <h4>СКИДКА</h4>
          <p>ДО</p>
          <span>60%</span>
        </div></a>
      </div>-->
        </div>

        <div class="col-md-9 product-price1">
        <div class="check-out">  
      
     <div class=" cart-items">
       <h3>МОЯ КОРЗИНА</h3>
        <script>$(document).ready(function(c) {
          $('.close1').on('click', function(c){
            $('.cart-header').fadeOut('slow', function(c){
              $('.cart-header').remove();
            });
            });   
          });
         </script>
      <script>$(document).ready(function(c) {
          $('.close2').on('click', function(c){
            $('.cart-header1').fadeOut('slow', function(c){
              $('.cart-header1').remove();
            });
            });   
          });
         </script>
<form method="post" action="2.php">
<form method="post" action="product.php?page=cart">

  <div class="in-check" >
      <ul class="unit">
      <li><span>Название</span></li>
      <li><span>Цена</span></li>
      <li><span>Кол-во</span></li>
      <li><span>Сумма</span></li>
      <li> </li>
      <div class="clearfix"> </div>
      </ul>

        <?php
          if(isset($_SESSION['cart'])){

                  $sql="SELECT * FROM products WHERE id IN (";

                  foreach($_SESSION['cart'] as $id => $value) {
                      $sql.=$id.",";
                  }

                  $sql=substr($sql, 0, -1).") ORDER BY name ASC";
                  $result = mysqli_query($link, $sql);
                  $totalprice=0;
                  while($row = mysqli_fetch_array($result)){
                      
                        $subtotal=$_SESSION['cart'][$row['id']]['quantity']*$row['price'];
                        $totalprice+=$subtotal;

                        $name=$row['name'];
                        $price=$row['price'];
                        $id=$row['id']




                    ?>



                    <ul class="cart-header">
       
        <li><span><?php echo $name ?></span></li>

      <li><span><?php echo $price ?>P</span></li>

      </li><li><span><input type="text" name="quantity[<?php echo $id ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id']]['quantity'] ?>" /></span></li>

      </li><li><span><?php echo $_SESSION['cart'][$row['id']]['quantity']*$row['price'] ?>P</span></li>

      <li> <a href="single.html" class="add-cart cart-check">Карточка товара</a></li>
      <div class="clearfix"> </div>
      </ul>
                    <?php
                          
                    }
        ?> 
                    <tr> 
                        <td colspan="4">Итого к оплате: <?php echo $totalprice ?> Рублей</td>
                    </tr>
                  <?php  }?>

     

<button type="submit" name="submit">Обновить корзину</button> 
</form> 
    <!-- <button type="submit" name="zakaz" href="http://localhost/1.php">Оформить заказ</button> -->
   </form>
    </div>
  </div>
</div>
</div>
        <div class="clearfix"> </div>
      </div>
    </div>
<footer></footer>
<!--подключить footer-->
</body>
</html>