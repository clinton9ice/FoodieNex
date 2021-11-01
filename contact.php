<!DOCTYPE html>
<html class="no-js" lang="en-US">
<head>
    <title>Welcome to FoodieNex</title>
    <?php require_once "./includes/head.phtml"?>
</head>

<body app-name="contact">

<?php require_once "./includes/nav.phtml"?>

    <div class="hero-section" app-section="hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="hero-sec-content">
                        <h1>Contact</h1>
                      <?= include_once "includes/breadcrumb.phtml"?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "./includes/contact.phtml"?>

    <!-- RESERVATION -->
    <div class="reservation-form mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="menu-head col-xl-9 m-auto text-center">
                        <h2 class="title">Get in touch with us for your <span>Fresh Food Delivery</span></h2>
                        <p class="des">There are many variations of passages of Lorem Ipsum available but majority have
                            suffered alteration injected humour</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 m-auto">

                        <div class=" mt-5">
                            <h4>Personal Information</h4>
                        </div>

                        <form action="#" class="form-group">
                            <div class="row mt-4 mb-4">

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4">
                                    <label for="name">full Name <sup class="text-orange">*</sup></label>
                                    <input type="text" class="form-control reservation-input" id="name" name="name"
                                        placeholder="Write here" required />
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4">
                                    <label for="phone">Phone no </label>
                                    <input type="tel" class="form-control reservation-input" id="phone" name="phone"
                                        placeholder="+000" required />
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4">
                                    <label for="email">your email <sup class="text-orange">*</sup></label>
                                    <input type="email" class="form-control reservation-input" id="email" name="email"
                                        placeholder="support@gmail.com" required />
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4">
                                    <label for="address">address</label>
                                    <input type="text" class="form-control reservation-input" id="address"
                                        name="address" placeholder="Lagos, Lekki Phase 1" />
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4">
                                    <label for="textarea">Any special Request?</label>
                                    <textarea class="form-control reservation-textarea" id="textarea" name="textarea"
                                        rows="3" placeholder="Type Here"></textarea>
                                </div>


                                <div class="col-12 mt-5">
                                    <button type="button" class="book-now btn btn-success col-sm-7 col-md-3">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "./includes/footer.phtml"?>
</body>

</html>