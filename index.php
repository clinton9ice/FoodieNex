<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <title>Welcome to FoodieNex</title>
    <?php require_once "./includes/head.phtml"?>
</head>

<body app-name="home">

<?php include_once "includes/nav.phtml"?>

    <div class="home-hero-section">
        <div class="container-fluid px-3 mt-3">
            <div class="row align-items-center">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-7" data-aos="fade-in">
                    <div class="home-hero-content">
                        <h1 class="title">Get Satisfied With Great <strong> Taste </strong></h1>
                        <p class="sub-title">Lets get started with your <span> 
                            <a href="contact">Order!</a></span>
                            <div class="d-flex mb-4 mt-5">
                                <a class="btn custom-btn-outline mr-4" href="#">
                                    Learn More
                                </a>

                                <a class="btn custom-btn custom-btn-primary" href="#">Get Started
                                    <i class="icofont-double-right"></i>
                                </a>
                            </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
                    <div class="burger-img">
                        <img src="src/img/food ui.png" class="w-100 img-fluid" alt="" />
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="container-fluid section m-auto shapes-base row my-5 py-5 px-4 flex-wrap" app-section="offers">

        <div class="col-md-5 col-sm-10 p-4 shape-content" data-aos="fade-up">
            <h2 class="title">What We Offer</h2>
            <p class="des pt-4">
                FoodieNex is an online food store. We pride ourself as the best in providing top quality foods and
                confectioneries. Our number one priority is to satisfy every customer taste and make sure that our meal
                makes their day :).
            </p>
        </div>

        <div class="col-md-7 col-sm-10 shape-wrapper d-flex align-items-center justify-content-between">

            <div class="shape" data-aos="zoom-in" data-aos-delay="200">
                <div class="img">
                    <img src="src/img/icons/fav-food.png" alt="favourites" class="shape-img">
                </div>

                <p class="shape-cap">Choose Your Favourite Food</p>
            </div>

            <div class="shape" data-aos="zoom-in" data-aos-delay="400">
                <div class="img">
                    <img src="src/img/icons/delivery-man.png" alt="delivery_man" class="shape-img">
                </div>

                <p class="shape-cap">Get Delivery at your door step</p>
            </div>

            <div class="shape" data-aos="zoom-in" data-aos-delay="500">
                <div class="img">
                    <img src="src/img/icons/food-reviews.png" alt="food reviews" class="shape-img">
                </div>

                <p class="shape-cap">Gained over 500+ reviews from clients</p>
            </div>

        </div>

    </section>

    <?php require_once "./includes/specials.phtml"?>
    
    <?php require_once "./includes/services.phtml"?>

    <section class="food-menu-section my-4 section" app-section="food-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="menu-head text-center">
                        <h2 class="title">Today's <span>Menu</span></h2>
                        <p>The list of foods below are the top recommended foods from foodie. Order now and enjoy the
                            rest of your day. </p>
                    </div>
                </div>
            </div>

            <div class="row food-box">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="src/img/food1.png" class="w-100" alt="" />
                            </div>
                            <div class="overlay text-left">
                                <h4>Ingredients</h4>
                                <span>½ tbsp olive oil</span>
                                <span>1 onion, peeled and finely chopped</span>
                                <span>1 tsp mixed dried herbs</span>
                                <span>1 egg, beaten</span>
                                <span> 4 slices mature Cheddar (optional)</span>
                            </div>
                        </div>

                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2 class="caption">Chicken Burger</h2>
                                </div>

                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="food-info text-left">
                                        <span class="date"><i class="icofont-clock-time"></i> 25 min away</span>
                                        <h3 class="item-price"><span>$</span>89.00</h3>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                                    <a href="#" class="btn order-btn2">Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4" data-aos="zoom-in" data-aos-delay="250">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="src/img/food2.png" class="w-100" alt="" />
                            </div>
                            <div class="overlay text-left">
                                <h4>Ingredients</h4>
                                <span>½ tbsp olive oil</span>
                                <span>1 onion, peeled and finely chopped</span>
                                <span>1 tsp mixed dried herbs</span>
                                <span>1 egg, beaten</span>
                                <span> 4 slices mature Cheddar (optional)</span>
                            </div>
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2 class="caption">Special Beef Burger</h2>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="food-info text-left">
                                        <span class="date"><i class="icofont-clock-time"></i> 25 min away</span>
                                        <h3 class="item-price"><span>$</span>95.00</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                                    <a href="#" class="btn order-btn2">Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="food-menu">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="src/img/food3.png" class="w-100" alt="" />
                            </div>
                            <div class="overlay text-left">
                                <h4>Ingredients</h4>
                                <span>½ tbsp olive oil</span>
                                <span>1 onion, peeled and finely chopped</span>
                                <span>1 tsp mixed dried herbs</span>
                                <span>1 egg, beaten</span>
                                <span> 4 slices mature Cheddar (optional)</span>
                            </div>
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2 class="caption">Chicken Fry Pack</h2>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="food-info">
                                        <span class="date"><i class="icofont-clock-time"></i> 25 min away</span>
                                        <h3 class="item-price"><span>$</span>74.00</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                                    <a href="#" class="btn order-btn2">Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4" data-aos="zoom-in" data-aos-delay="350">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="src/img/food4.png" class="w-100" alt="" />
                            </div>
                            <div class="overlay text-left">
                                <h4>Ingredients</h4>
                                <span>½ tbsp olive oil</span>
                                <span>1 onion, peeled and finely chopped</span>
                                <span>1 tsp mixed dried herbs</span>
                                <span>1 egg, beaten</span>
                                <span> 4 slices mature Cheddar (optional)</span>
                            </div>
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2 class="caption">Hotte Sendwise</h2>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="food-info">
                                        <span class="date"><i class="icofont-clock-time"></i> 25 min away</span>
                                        <h3 class="item-price"><span>$</span>25.00</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                                    <a href="#" class="btn order-btn2">Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="src/img/food5.png" class="w-100" alt="" />
                            </div>
                            <div class="overlay text-left">
                                <h4>Ingredients</h4>
                                <span>½ tbsp olive oil</span>
                                <span>1 onion, peeled and finely chopped</span>
                                <span>1 tsp mixed dried herbs</span>
                                <span>1 egg, beaten</span>
                                <span> 4 slices mature Cheddar (optional)</span>
                            </div>
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2 class="caption">Vegetable Roll</h2>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="food-info text-left">
                                        <span class="date"><i class="icofont-clock-time"></i> 25 min away</span>
                                        <h3 class="item-price"><span>$</span>18.00</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                                    <a href="#" class="btn order-btn2">Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4" data-aos="zoom-in" data-aos-delay="450">
                    <div class="food-menu text-center">
                        <div class="food-img-info">
                            <div class="food-img">
                                <img src="src/img/food6.png" class="w-100" alt="" />
                            </div>
                            <div class="overlay text-left">
                                <h4>Ingredients</h4>
                                <span>½ tbsp olive oil</span>
                                <span>1 onion, peeled and finely chopped</span>
                                <span>1 tsp mixed dried herbs</span>
                                <span>1 egg, beaten</span>
                                <span> 4 slices mature Cheddar (optional)</span>
                            </div>
                        </div>
                        <div class="food-informaion">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h2 class="caption">French Fry</h2>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <div class="food-info text-left">
                                        <span class="date"><i class="icofont-clock-time"></i> 25 min away</span>
                                        <h3 class="item-price"><span>$</span>16.00</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
                                    <a href="#" class="btn order-btn2">Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customer-section section" app-section="customer-reviews">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg 12 col-xl-12">
                    <div class="customer-head text-center menu-head">
                        <h2 class="title">Some of Our Satisfied <span>Customer.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="images-position position-relative">
                    <div class="customer1-img">
                        <img src="src/img/customer1.png" class="w-100 img-fluid" alt="" />
                    </div>
                    <div class="customer2-img">
                        <img src="src/img/customer2.png" class="w-100 img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="testimonial-slider">
                        <div class="customer-information text-center">
                            <div class="customer-img">
                                <img src="src/img/customer1.png" class="w-100 img-fluid" alt="" />
                            </div>
                            <div class="customer-content">
                                <p class="des">
                                    If you are going to use a passage of cren you need to isn't anything embarrassing
                                    hidden in the middle of text generators Internet tend repeat predefined chunks as
                                    necessary making this the first true
                                    generator on the Internet.
                                </p>
                                <h3><a href="#">Kristyn Hairston</a></h3>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                        <div class="customer-information text-center">
                            <div class="customer-img">
                                <img src="src/img/customer2.png" class="w-100 img-fluid" alt="" />
                            </div>
                            <div class="customer-content">
                                <p class="des">
                                    If you are going to use a passage of cren you need to isn't anything embarrassing
                                    hidden in the middle of text generators Internet tend repeat predefined chunks as
                                    necessary making this the first true
                                    generator on the Internet.
                                </p>
                                <h3><a href="#">Antor Biswas</a></h3>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                        <div class="customer-information text-center">
                            <div class="customer-img">
                                <img src="src/img/customer3.png" class="w-100 img-fluid" alt="" />
                            </div>
                            <div class="customer-content">
                                <p class="des">
                                    If you are going to use a passage of cren you need to isn't anything embarrassing
                                    hidden in the middle of text generators Internet tend repeat predefined chunks as
                                    necessary making this the first true
                                    generator on the Internet.
                                </p>
                                <h3><a href="#">Marie Hairston</a></h3>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                        <div class="customer-information text-center">
                            <div class="customer-img">
                                <img src="src/img/customer4.png" class="w-100 img-fluid" alt="" />
                            </div>
                            <div class="customer-content">
                                <p class="des">
                                    If you are going to use a passage of cren you need to isn't anything embarrassing
                                    hidden in the middle of text generators Internet tend repeat predefined chunks as
                                    necessary making this the first true
                                    generator on the Internet.
                                </p>
                                <h3><a href="#">Hannah Hairston</a></h3>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="images-position position-relative">
                    <div class="customer3-img">
                        <img src="src/img/customer3.png" class="w-100 img-fluid" alt="" />
                    </div>
                    <div class="customer4-img">
                        <img src="src/img/customer4.png" class="w-100 img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-container my-5 section" app-section="blog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="customer-head text-center menu-head">
                        <h2 class="title">Latest <span class="text-orange">Article</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row blog-rows mt-4 pt-5">
                <div class="blog-row row col-md-6 col-sm-10 align-items-center">
                    <div class="blog-img img-thumbnail col-md-3">
                        <img src="src/img/cakes/deva-williamson-HHebuDYjP4I-unsplash.jpg" alt="" class="w-100">
                    </div>

                    <a href="post" class="blog-txt col-md-8">
                        <p class="blog-des">
                            Best booking systems and table planners for restaurants.
                        </p>
                        <p class="mt-3">
                            <div class="blog-badge primary">recipe</div>

                    </a>
                </div>

                <div class="blog-row row col-md-6 col-sm-10 align-items-center">
                    <div class="blog-img img-thumbnail col-md-3">
                        <img src="src/img/cakes/danil-aksenov-bkXzABDt08Q-unsplash.jpg" alt="" class="w-100">
                    </div>

                    <a href="post" class="blog-txt col-md-8">
                        <p class="blog-des"> Lorem ipsum dolor sit amet consectetur adi1pisicing elit. Quasi ipsum ad
                            asperiores voluptas temporibus similique!
                        </p>
                        <p class="mt-3">
                            <div class="blog-badge secondary">food</div>
                    </a>
                </div>

                <div class="blog-row row col-md-6 col-sm-10 align-items-center">
                    <div class="blog-img img-thumbnail col-md-3">
                        <img src="src/img/cakes/divani-diva--R7vMzV078Q-unsplash.jpg" alt="" class="w-100">
                    </div>

                    <a href="post" class="blog-txt col-md-8">
                        <p class="blog-des"> Lorem ipsum dolor sit amet consectetur adi1pisicing elit. Quasi ipsum ad
                            asperiores voluptas temporibus similique!
                        </p>
                        <p class="mt-3">
                            <div class="blog-badge secondary">food</div>
                    </a>
                </div>

            </div>

            <a href="blog" class="btn text-success col-md-4 d-block m-auto"> Load More</a>
        </div>

    </section>

    <?php require_once "./includes/footer.phtml"?>
</body>

</html>