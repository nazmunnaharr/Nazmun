<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Online Shopning Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                  <div id="bannerContent">
                       <h3>WELL COME OUR ONLINE SHOPING SITE</h3>
                   </div> 
                   </center>
               </div>
           </div>  
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="image/third.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Women Cloth</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products2.php">
                               <img src="img/a1.jpg" alt="a1">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Accessories</p>
                                    <p>Choose among the best available Accessories Iteam in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products1.php">
                               <img src="img/b8.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Men Iteam</p>
                                   <p>Our exquisite collection of Mans Iteam.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
                <center>
                   <p>Thanks for visiting our online shoping site.</p>
                   <P>If Any problem Contect With Us in Email="emonalam46@gmail.com"</P>
                   <p>This website is developed by "All Pain,No Gain Team"</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>