<?php 
session_start();

if(!isset($_SESSION['cart']) || empty($_SESSION['cart']) ){
    header("location: index.php");
}

?>

<!-- header section -->
<?php include("header.php") ;?>
    <!-- heading section ends here -->
<!-- Checkout section... -->


<section class="my-5 py-5 checkout">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold"> Check Out   </h2>
        <hr class="mx-auto">
    </div>
    <div class="container mx-auto">
        <form id="checkout-form" action="place_order.php" method="POST">
            <div class="form-group checkout-small-element">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="checkout-name" name="name" placeholder="name" required>
            </div>

            <div class="form-group checkout-small-element">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="checkout-email" name="email" placeholder="Email Address" required>
            </div>

            <div class="form-group checkout-small-element">
                <label for="Phone">Phone</label>
                <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone Number" required>
            </div>

            <div class="form-group checkout-small-element">
                <label for="city">City</label>
                <input type="text" class="form-control" id="checkout-city" name="city" placeholder="city" required>
            </div>

            <div class="form-group checkout-large-element">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required>
            </div>

            <div class="form-group checkout-btn-container">
                <p>Total Amount: <?php echo "$". $_SESSION['total']?> </p>
                <input type="submit" class="btn" id="checkout_btn" name="checkout_btn" value="Checkout">
            </div>
        </form>
    </div>
</section>

<!-- Checkout ends here... -->

  <!-- footer section starts from here -->
  <?php include("footer.php"); ?>


<!-- footer section ends from here -->


