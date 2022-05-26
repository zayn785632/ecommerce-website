




<!-- header section -->
<?php include("header.php") ;?>
<?php include("place_order.php"); ?>

    <!-- heading section ends here -->


<!-- payment section... -->


<section class="my-5 py-5 checkout">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">payment</h2>
        <hr class="mx-auto">
    </div>


            <div class="container mx-auto text-center">
            <?php if(isset($_SESSION['order_id']) && $_SESSION['order_id'] != 0
                            && isset($_SESSION['total']) && $_SESSION['total'] !=0 ) { ?>

                            <?php $amount = strval($_SESSION['total']); ?>

                            <p>Total: <?php echo "$". $_SESSION['total'];?></p>
                            <div id="paypal-button-container"></div>

                
                 <?php } else { ?>
                        <p>You don't have an order</p> 
                 <?php } ?>
        
            </div>
                 </div>
</section>
 
<!-- Checkout ends here... -->

                  <!-- payment button -->
            <script src="https://www.paypal.com/sdk/js?client-id=AZNgSJVJcWYGkpTl5Gk8lue6jGW0JksnDSHdg_C60Z7SS1Gk9fEXgDpxshuoOKXjii-peJ4woiXa5dUA&currency=USD"></script>
             <!-- Set up a container element for the button -->
    

    <script>
      paypal.Buttons({

        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '<?php echo $amount; ?>' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
              }
            }]
          });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                window.location.href = "complete_payment.php?transaction_id="+transaction.id ;
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // var element = document.getElementById('paypal-button-container');
            // element.innerHTML = '';
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');

    </script>

  <!-- footer section starts from here -->
  <?php include("footer.php"); ?>


<!-- footer section ends from here -->



<!-- buyer email id and password -->
<!-- sb-z57v114541166@personal.example.com -->
<!-- pBFG0w!y -->