<?php

session_start();
if(isset($_POST['add_to_cart'])){
//it means there is only one products
if(isset($_SESSION['cart'])){
   $products_array_ids = array_column($_SESSION['cart'],"product_id");
//check if products has already been added to cart or not 
   if(!in_array($_POST['product_id'],$products_array_ids)){
       //add products to the cart
       $product_id = $_POST['product_id'];

       $product_array = array(
                        'product_id'=>$product_id,
                        'product_name'=>$_POST['product_name'],
                        'product_price'=>$_POST['product_price'],
                        'product_image'=>$_POST['product_image'],
                        'product_special_offer'=>$_POST['product_special_offer'],
                        'product_quantity'=>$_POST['product_quantity']

       );
       $_SESSION['cart'][$product_id] =$product_array;
   }else{
       echo '<script>alert("products has already been added to the cart")</script>';
   }

   //if user is adding first products to cart
}else{
    //add product to cart
    $product_id =$_POST['product_id'];

    $product_array = array(
        'product_id'=>$product_id,
                        'product_name'=>$_POST['product_name'],
                        'product_price'=>$_POST['product_price'],
                        'product_image'=>$_POST['product_image'],
                        'product_special_offer'=>$_POST['product_special_offer'],
                        'product_quantity'=>$_POST['product_quantity']

    );

    $_SESSION['cart'][$product_id] = $product_array;

    
}

//calculate total cart

calcualteTotalCart();

  //this line of code will remove the products
}else if(isset($_POST['remove_btn'])){


    $product_id =$_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);
//calculate  total cart
calcualteTotalCart();


//update quantity...
}else if(isset($_POST['edit_quantity_btn'])){
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];
    $product = $_SESSION['cart'][$product_id];
    
    $product['product_quantity'] = $product_quantity;

    $_SESSION['cart'][$product_id] = $product;

    //calculate total cart...
    calcualteTotalCart();

}else{

}

function calcualteTotalCart(){
    $total_price =0;
    $total_quantity = 0;
    foreach($_SESSION['cart'] as $id=>$product){
        $product = $_SESSION['cart'][$id];

        $price = $product['product_price'];
        
        $quantity = $product['product_quantity'];

        $total_price =$total_price+($price*$quantity);
        $total_quantity = $total_quantity +  $quantity;
        
    }
    $_SESSION['total'] = $total_price;
    $_SESSION['quantity'] = $total_quantity;
}
?>

<!-- header section starts from here -->


<?php include("header.php") ;?>


<!-- header section ends from here -->



<!-- cart section starts from here -->

<section class="cart container mt-5 my-3 py-5">
    <div class="container mt-5">
        <h2 class="font-weight-bold ">Your Cart</h2>
        <hr class="hrr">
    </div>
    <table class="mt-5 pt-5">
        <tr>
            <th>Products</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            
        </tr>

<!-- session code -->
        <?php if(isset($_SESSION['cart'])){ ?>
        <?php foreach($_SESSION['cart'] as  $key => $value){ ?>
        
        <tr>
            <td>
                <div class="product-info">
                    <img src="<?php echo 'img/'.$value['product_image']; ?>" alt="">
                    <div>
                        <p><?php echo $value['product_name']; ?></p>
                        <small><span></span>$<?php echo $value['product_price']; ?></small>
                        <br>
                        <form action="cart.php" method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>">
                            <input type="submit" value="remove" name="remove_btn" class="remove-btn">

                        </form>
                    </div>
                </div>
            </td>

            <td>
                <form method="POST" action="cart.php">
                    <input type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>" >
                    <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>">
                    <input type="submit" name="edit_quantity_btn" value="edit" class="edit-btn">
                </form>
            </td>

            <td>
                <span class="product-price"><?php echo $value['product_price'] * $value['product_quantity']; ?></span>
            </td>
        </tr>
        <?php  }?>
        
        <?php }?>
       

       
    </table>

    <div class="cart-total">
        <table>
            <tr>
                <td>Total</td>
                <?php if(isset($_SESSION['cart'])){ ?>
                <td><?php echo "$".$_SESSION['total'] ;?></td>
                <?php } ?>
            </tr>
        </table>
    </div>

    <div class="checkout-container">
        <form action="checkout.php" method="GET">
            <input type="submit" class="btn checkout-btn" value="checkout">
        </form>

    </div>
</section>





<!-- cart section ends from here -->













    <!-- footer section starts from here -->
<?php include("footer.php"); ?>

<!-- footer section ends from here -->


