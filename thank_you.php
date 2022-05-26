




<!-- header section -->
<?php include("header.php") ;?>
<?php include("place_order.php"); ?>
<?php 

if(isset($_SESSION['order_id']) && $_SESSION['order_id'] != 0
&& isset($_SESSION['total']) && $_SESSION['total'] !=0 ){
    $order_id = $_SESSION['order_id'];
    $total = $_SESSION['total'];

    //remove everything from session
    session_unset();
    session_destroy();

}else{
    header("location: index.php ");
}

?>
    <!-- heading section ends here -->


<!-- payment section... -->


<section class="my-5 py-5 checkout">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">payment</h2>
        <hr class="mx-auto">
    </div>


            <div class="container mx-auto text-center">
            
                            <?php if(isset($_GET['Success_message'])) { ?>
                                   <h3 style="color: green;"><?php echo $_GET['Success_message']; ?></h3>
                              <?php } ?>

                            <p><?php echo "order id:" .$order_id ; ?></p>
                            <p> <?php echo "please keep order id in safe place for future reference."; ?></p>

                            
                            

                
                
        
            </div>
                 </div>
</section>
 
<!-- Checkout ends here... -->

                

  <!-- footer section starts from here -->
  <?php include("footer.php"); ?>


<!-- footer section ends from here -->



<!-- buyer email id and password -->
<!-- sb-z57v114541166@personal.example.com -->
<!-- pBFG0w!y -->