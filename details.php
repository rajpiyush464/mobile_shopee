<?php
ob_start();
// include header.php file
include ('header.php');
?>
  <?php

    $item=$_SESSION['itid'];

?>
                    
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 my-5">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">

            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <h5 class="font-baloo font-size-14 text-danger ">Rs:<?php echo $item['item_price'] ?? "Unknown"; ?></h5>
                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <hr class="m-0">
               <table class="my-3">
                <tr>
                <th class='font-rale font-size-16'></th>Delivery Details</tr>
                <!---    product price       -->
                <?php
                $conn = mysqli_connect('localhost','root','','shopee');
                $sql = "SELECT * from `delivery`";
                $res = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($res)) {
                   echo " 
                    <tr class='font-rale font-size-14'>
                        <td>Name:</td>
                        <td class='font-size-14'><span>". $row['name']."</span></td>
                    </tr>
                    <tr class='font-rale font-size-14'>
                        <td>Address:</td>
                         <td class='font-size-14'><span>".$row['address']."</span></td>
                    </tr>

                    <tr class='font-rale font-size-14'>
                        <td>Pin Number:</td>
                         <td class='font-size-14'><span>".$row['pin']."</span></td>
                    </tr>
                    
                    <tr class='font-rale font-size-14'>
                    <td>Phone Number:</td>
                     <td class='font-size-14'><span>".$row['num']."</span></td>
                </tr>";
                break;}
                    ?>
                </table>
                <!---    !product price       -->

             
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Expected Delivery: <?php
                                            $day = date( "d-M-Y", strtotime( "+3 days" ) );
                                            echo $day;
                                          ?></small>
                    <small>Sold by <a href="#">Digital Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                </div>
                <!-- !order-details -->

                
            </div>
        </div>
    </div>
</section>
<!--   !product  -->
<?php

    /*  include top sale section */
    include ('Template/_top-sale.php');
    /*  include top sale section */

?>


<?php
// include footer.php file
include ('footer.php');
?>

