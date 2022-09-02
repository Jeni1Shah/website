<?php
session_start();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSFC Canteen</title>
    <!-- custom css file link  -->

    <link rel="stylesheet" href="style.css">


    <!--Bootstrap link-->

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body style="background-color: #000000;">

    <!-- header section starts  -->

    <header>
        <a href="https://www.gsfcuni.edu.in/" target="_main"><img src="images/icon.png" alt=""></a>
        <a href="https://www.gsfcuni.edu.in/" class="logo">GSFC University</a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#speciality">speciality</a>
            <a href="#popular">popular</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <?php
            $count = 0;
            if (isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
            }
            ?>
            <a href="mycart.php">Cart(<?php echo $count ?>)</a>
        </nav>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <div class="loader">
                <h3>CanteenPoint</h3>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas accusamus tempore temporibus rem amet
                laudantium animi optio voluptatum. Natus obcaecati unde porro nostrum ipsam itaque impedit incidunt rem
                quisquam eos!</p>
            <a href="#popular" class="btn">order now</a>
        </div>

        <div class="image">
            <img src="images/home-img.png" alt="">
        </div>

    </section>

    <!-- home section ends -->

    <!-- speciality section starts  -->

    <section class="speciality" id="speciality">

        <h1 class="heading"> our <span>speciality</span> </h1>

        <div class="box-container">

            <div class="box">
                <img class="image" src="images/s-img-1.jpeg" alt="">
                <div class="content">
                    <img src="images/s-1.png" alt="">
                    <h3>masala dosa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-2.webp" alt="">
                <div class="content">
                    <img src="images/s-2.png" alt="">
                    <h3>samosas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-3.webp" alt="">
                <div class="content">
                    <img src="images/s-3.png" alt="">
                    <h3>ice-cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-4.webp" alt="">
                <div class="content">
                    <img src="images/s-4.png" alt="">
                    <h3>cold drinks</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-5.webp" alt="">
                <div class="content">
                    <img src="images/s-5.png" alt="" id="icon">
                    <h3>chinese</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-6.webp" alt="">
                <div class="content">
                    <img src="images/s-6.png" alt="" id="icon">
                    <h3>Pasta</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>

        </div>

    </section>

    <!-- speciality section ends -->

    <!-- popular section starts  -->

    <section class="popular" id="popular">

        <h1 class="heading"> most <span>popular</span> foods </h1>

        <div class="box-container">

            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 90 </span>
                    <img src="images/home-img.png" alt="">
                    <h3>Masala Dhosa</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>

                    <!-- Edit Button -->
                    <button href="#" class="btn" name="Add_to_Cart" type="submit">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Masala Dhosa">
                    <input type="hidden" name="Price" id="" value="90">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 70 </span>
                    <img src="images/p-2.webp" alt="">
                    <h3>Pasta</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Pasta">
                    <input type="hidden" name="Price" id="" value="70">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 25 </span>
                    <img src="images/p-3.webp" alt="">
                    <h3>Samosa Chat</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Samosa Chat">
                    <input type="hidden" name="Price" id="" value="25">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 50 </span>
                    <img src="images/p-4.webp" alt="">
                    <h3>maggi</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Maggi">
                    <input type="hidden" name="Price" id="" value="25">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 80 </span>
                    <img src="images/pchilli.jpg" alt="">
                    <h3>paneer chilli</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Paneer Chilli">
                    <input type="hidden" name="Price" id="" value="80">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 50 </span>
                    <img src="images/uttapam.jpg" alt="">
                    <h3>uttapam</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Uttapam">
                    <input type="hidden" name="Price" id="" value="50">
                </form>
            </div>

            <!--NEW-->
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 70 </span>
                    <img src="images/rice.jpg" alt="">
                    <h3>Fried Rice</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Fried Rice">
                    <input type="hidden" name="Price" id="" value="70">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 80 </span>
                    <img src="images/manchurian.jpg" alt="">
                    <h3>Manchurian</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Manchurian">
                    <input type="hidden" name="Price" id="" value="80">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 20 </span>
                    <img src="images/p-5.jpg" alt="">
                    <h3>cold drinks</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Cold Drinks">
                    <input type="hidden" name="Price" id="" value="20">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 35 </span>
                    <img src="images/p-6.jpg" alt="">
                    <h3>ice-cream</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Ice-Cream">
                    <input type="hidden" name="Price" id="" value="35">
                </form>
            </div>
            <!--NEW end-->

        </div>

    </section>

    <!-- popular section ends -->

    <!-- steps section starts  -->

    <div class="step-container">

        <h1 class="heading">how it <span>works</span></h1>

        <section class="steps">

            <div class="box">
                <img src="images/step-1.jpg" alt="">
                <h3>choose your favorite food</h3>
            </div>

            <div class="box">
                <img src="images/step-3.jpg" alt="">
                <h3>easy payments methods</h3>
            </div>
            <div class="box">
                <img src="images/step-4.jpg" alt="">
                <h3>and finally, enjoy your food</h3>
            </div>

        </section>

    </div>

    <!-- steps section ends -->

    <!-- gallery section starts  -->

    <!-- <section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>

    </div>

</section> -->

    <!-- gallery section ends -->


    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> our customers <span>reviews</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic1.jpeg" alt="">
                <h3>Jenil Shah</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Okay, can be better.</p>
            </div>
            <div class="box">
                <img src="images/pic2.jpeg" alt="">
                <h3>Vaidehi Gajjar</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Really good, really really good food!</p>
            </div>
            <div class="box">
                <img src="images/pic3.jpg" alt="">
                <h3>Aditya Patel</h3>
                <div class="stars">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Aisa nahi hota!</p>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- order section starts  -->

    <section class="order" id="order">

        <h1 class="heading"> <span>order</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="images/order-img.jpg" alt="">
            </div>

            <form action="">

                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>

                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="food name">
                </div>

                <textarea placeholder="address" name="" id="" cols="30" rows="10"></textarea>

                <input type="submit" value="order now" class="btn">

            </form>

        </div>

    </section>

    <!-- order section ends -->

    <!-- footer section  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="btn">facebook</a>
            <a href="#" class="btn">twitter</a>
            <a href="#" class="btn">instagram</a>
            <a href="#" class="btn">pinterest</a>
            <a href="#" class="btn">linkedin</a>
        </div>

        <h1 class="credit"> created by <span> Group 8 people </span> | all rights reserved! </h1>

    </section>

    <!-- scroll top button  -->
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

    <!-- loader  -->
    <!-- <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div> -->




















    <!-- custom js file link  -->
    <script src="script.js"></script>


</body>

</html>