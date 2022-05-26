<?php include("header.php") ;?>

   
    <!-- home section starts from here -->
    <section class="home" id="home">
        <div class="content">
            <h3>Splendid & High Quality Products</h3>
            <span>Natural & Elegant</span>
            <p>Your perfect choice is here :)</p>
            <a href="#products" class="main-btn">Shop Now</a>
        </div>
    </section>


    <!-- home section ends here -->

    <!-- about section starts from here -->
   <section id="about" class="about">
       <h1 class="heading">
           <span>About</span> Us
       </h1>
       <div class="main-row">
           <div class="video-container">
               <video src="img/vid.mp4" loop autoplay muted></video>
               <h3>Best products</h3>
           </div>
           <div class="content">
               <h3>Why choose us</h3>
               <p><b>চাঁটগাইয়াMart</b> offers a unique selection of stylish, contemporary, and chic furniture online. Our online furniture range includes sofas, beds, dining tables, TV units, wardrobes, dressing tables, and lots more. All our wooden furniture designs are available online at <b>GGmart.com.</b></p>


               <a href="#" class="main-btn">Learn more</a>
           </div>
       </div>
   </section>

    <!-- about section starts from here -->
<!-- icons section -->

<section class="icon-container" id="features">
    <div class="icons">
        <i class="fas fa-shopping-cart"></i>
        <div class="info">
            <h3>Free delivery</h3>
            <span>On all orders</span>
        </div>

    </div>

    <div class="icons">
        <i class="fas fa-tags"></i>
        <div class="info">
            <h3>15 days return</h3>
            <span>Moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-gifts"></i>
        <div class="info">
            <h3>gifts</h3>
            <span>gifts for loved ones</span>
        </div>

    </div>

    <div class="icons">
        <i class="fab fa-paypal"></i>
        <div class="info">
            <h3>secure payment</h3>
            <span>Protected by paypal</span>
        </div>

    </div>
</section>

<!-- icon section ends here -->

<!-- product section -->

<section id="products" class="products">
    <h1 class="heading">Latest <span>Products</span></h1>

    <div class="box-container">

        <?php include("get_product.php"); ?>

        <?php foreach($products as $product){ ?>

        <div class="box">
            
            <div class="image">
                <img src="<?php echo "img/".$product['product_image']; ?>" alt="">
                <div class="form">
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>"> 
                        <input type="hidden" name="product_name" value="<?php echo $product['product_name']; ?>"> 
                        <input type="hidden" name="product_image" value="<?php echo $product['product_image']; ?>"> 
                        <input type="hidden" name="product_price" value="<?php echo $product['product_price']; ?>"> 
                        <input type="hidden" name="product_special_offer" value="<?php echo $product['product_special_offer']; ?>"> 
                        <input type="hidden" name="product_quantity" value="1"> 
                        <input type="submit" class="cart-btn" value="add to the cart" name="add_to_cart">
                    </form>

                </div>
            </div>
            <span class="discount"><?php echo $product['product_special_offer'];?>% OFF</span>
            <div class="content">
                <h3><?php echo $product['product_name']; ?></h3>
                <div class="price"><?php echo "$". $product['product_price']; ?> <span>$120</span></div>
            </div>
        </div>
        <?php } ?>


       

    </div>
</section>
<!-- product section ends here -->


<!-- review section starts from here -->

<section class="review" id="review">
    <h1 class="heading">Customer's <span>Reviews</span></h1>
    <div class="box-container">

       <div class="box3">
       <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Awesome Products. I like those products so much. they are so trusted and reliable :")</p>
        <div class="user">
            <img src="img/sabbir.jpg" alt="">
            <div class="user-info">
                <h3 >Sabbir</h3>
                <span>Happy Customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
       </div>

       <div class="box3">
       <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Have been using tremendous and Aesthetic lamp from these shop. designs are so unique..</p>
        <div class="user">
            <img src="img/uhla.jpg" alt="">
            <div class="user-info">
                <h3 >Uhlapru</h3>
                <span>Happy Customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
       </div>
       
       <div class="box3">
       <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Costly but great in quality and design. I like those products so much. Also their delivery are so fast.</p>
        <div class="user">
            <img src="img/choyonn.jpg" alt="">
            <div class="user-info">
                <h3 >Chayon</h3>
                <span>Happy Customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
       </div>
       
       <div class="box3">
       <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Cool and great Products quality. been using them peacefully like 2 years</p>
        <div class="user">
            <img src="img/arnab.jpg" alt="">
            <div class="user-info">
                <h3 >Arnab</h3>
                <span>Happy Customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
       </div>
       
    </div>
</section>


<!-- review section ends from here -->

<!-- contacts section starts from here -->
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>
    <div class="main-row">
        <div class="contact-info">
            <h3>Contact Number: +888 696 2022</h3>
            <p>Customer Service: <span>customer2020@icloud.com</span></p>
            <p>return and refunds: <span>return2020@icloud.com</span></p>
            <p>inqueries: <span>inqueries2020@icloud.com</span></p>
        </div>
    </div>
</section>
<!-- contacts section ends from here -->


<?php include("footer.php"); ?>

