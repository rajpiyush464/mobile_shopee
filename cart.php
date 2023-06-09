<?php
ob_start();
include ('header.php');
?>

<?php

  
        count($product->getDataCart('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');
  

       
        count($product->getDataCart('wishlist')) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');
       


   
        include ('Template/_top-sale.php');
   

?>

<?php

include ('footer.php');
?>


