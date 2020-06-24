<!DOCTYPE html>
<html>
<head>
    <title>Kslavovich</title>
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

</head>
<body>

<div class=" header-product">
    <div class="header-top com">
        <div class="container">
            <div class="header-top-in grid-1">
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
    
    <a>Приветствуем, <?php echo $_SESSION['logged_user']->login; ?>!</a><br/></li>

<li>    <a href="logout.php">Выйти</a></li>

<?php else : ?>
<a>Вы не авторизованы!<a><br/>

<li><a href="/login.php">Войти</a></li>
<li><a href="/signup.php">Создать аккаунт</a></li>
<?php endif; ?>

                    <li>
                        
                    </li>
                <!--    <li ><a href="account.html" ><i class="men"> </i>Войти</a></li>
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
                        <!--<li><a  href="index.html">Главная</a></li>-->
                        <li><a  href="contact.html" style="color:red;">Обратная связь</a></li>
                        <!--<li class="active grid"><a  href="#" style="color:red;">Магазин</a>-->
                        <li><a href="about.html" style="color:red;">О нас</a></li>
                        <li><a href="product.php" style="color:red;">Магазин</a></li>
                            <div class="megapanel">
                                <div class="row">
                                    <div class=" col-nav">
                                        
                                </div>
                            </div>
                        </li>

                    </ul>
                    <!--
                                        <div class="search-in" >
                                            <div class="search" >
                                                <form action="search.html">
                                                    <input type="text" value="Keywords" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keywords';}" class="text">
                                                    <input type="submit" value="SEARCH">
                                                </form>
                                                <div class="close-in"><img src="images/close.png" alt="" /></div>
                                            </div>
                                            <div class="right"><button> </button></div>
                                        </div>
                                        <script type="text/javascript">
                                            $('.search').hide();
                                            $('button').click(function (){
                                                    $('.search').show();
                                                    $('.text').focus();
                                                }
                                            );
                                            $('.close-in').click(function(){
                                                $('.search').hide();
                                            });
                                        </script>

                    -->
                    <div class="cart box_1">
                        <a href="product.php?page=cart">
                            <h3> <div class="total">
                                <span class="simpleCart_total1"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> товаров)</div>
                                <img src="images/cart.png" alt=""/></h3>
                        </a>
                        <p><a href="product.php?page=cart" class="simpleCart_empty">Корзина</a></p>
                        <div class="clearfix"> </div>
                    </div>

                    <!---->
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

</div>
<!---->