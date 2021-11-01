<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <?php require_once "./includes/head.phtml"?>
    <title>Post | FoodieNex</title>
</head>

<body>
<?php
require_once "./includes/nav.phtml";
$header = isset($_GET["CID"])? $_GET["CID"] : 0;
$headline = !empty($header) && !is_int($header)?htmlspecialchars($header ): "Best booking systems and table planners for restaurants.";
?>


<!------------->
<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="hero-sec-content">
                    <h1 class="caption">Post</h1>
                    <?php require_once "./includes/breadcrumb.phtml"?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============ -->

<div class="blog-details mb-5" app-section="blog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="blog-container">
                    <h3><?= str_replace("_", " ", $headline)?></h3>

                    <div class="customer-name">
                        <a class="text-orange">By: Clinton | </a>
                        <span>Date: 25 August, 2020</span>
                    </div>
                    <p>
                        When trying to get new customers keep your visitoers attenton peope only have time to check
                        thin gse when they aren traveling somen makes sense to have your site optimized ever
                        possible device have timean and
                        the Internet evergrowing ocean of information ocean of information and it impera tive thate
                        your site not only stand out visually to your visitors, but structurally search engines been
                        built from the ground
                        up using the latest, semantic HTML5 markup, allowing search engines easily distinguish where
                        your main content starts and ends and easily distinguish.
                    </p>

                    <div class="details-img">
                        <img src="src/img/detailsimg.png" class="w-100 img-fluid" alt=""/>
                    </div>


                    <p>
                        When trying to get new customers keep your visitoers attenton peope only have time to check
                        thin gse when they aren traveling somen makes sense to have your site optimized ever
                        possible device have timean and
                        the Internet evergrowing ocean of information ocean of information and it impera tive thate
                        your site not only stand out visually to your visitors.
                    </p>
                    <p>
                        When trying to get new customers keep your visitoers attenton peope only have time to check
                        thin gse when they aren traveling somen makes sense to have your site optimized ever
                        possible device have timean and
                        the Internet evergrowing ocean of information ocean of information and it impera tive thate
                        your site not only stand out visually to your visitors, but structurally search engines been
                        built from the ground
                        up using the latest, semantic HTML5 markup, allowing search engines easily distinguish where
                        your main content starts and ends and easily distinguish.
                    </p>

                    <div class="content-tag d-flex flex-wrap justify-content-between align-items-center">
                        <div class="tags">
                            <ul class="list">
                                <li class="list-item">
                                    <a href="#"><span>Tags:</span></a>
                                </li>
                                <li class="list-item"><a href="#">Restaurant,</a></li>
                                <li class="list-item"><a href="#">Company,</a></li>
                                <li class="list-item"><a href="#">Food</a></li>
                            </ul>
                        </div>

                        <div class="social-media-icon pt-3">
                            <ul>
                                <li>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="comment-section block" app-content="Comments">
                        <h3 class="caption mb-5">Comments</h3>

                        <div class="comment d-flex p-2" app-comment="you">
                            <div class="img">
                                <img src="src/img/person1.png" class="w-100 img-fluid" alt=""/>
                            </div>

                            <div class="comment-content">
                                <div class="name">
                                    <a href="#" id="1232323" class="link">Kodins Creankis</a>
                                </div>

                                <span class="sub-title">Business Man</span>
                                <p class="text">
                                    When trying to get new customers keep your visitoers attenton peope only have
                                    time to check thin gse when they aren traveling somen makes sense to have your
                                    site optimized ever possible device
                                    have timean and the Internet.
                                </p>
                                <div>
                                    <a href="#" class="reply-btn"><i class="icofont-reply"></i> Reply</a>
                                </div>
                            </div>
                        </div>

                        <div class="response comment d-flex p-2" app-comment="visitor">
                            <div class="img">
                                <img src="src/img/person1.png" class="w-100 img-fluid" alt=""/>
                            </div>

                            <div class="comment-content">
                                <div class="name">
                                    <a href="#" id="5611228" class="link">Jennifer Dones</a>
                                </div>

                                <span class="sub-title">Cake Artist</span>
                                <p class="text">
                                    When trying to get new customers keep your visitoers attenton peope only have
                                    time to check thin gse when they aren traveling somen makes sense to have your
                                    site optimized ever possible device
                                    have timean and the Internet.
                                </p>
                                <div>
                                    <a href="#" class="reply-btn"><i class="icofont-reply"></i> Reply</a>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="blog_form mt-3" app-content="comment-form">
                        <h3 class="caption">Leave A Comments</h3>
                        <form action="#">
                            <div class="form-row mt-4">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <input type="text" class="form-control custom-input" id="name" name="name"
                                           value="" placeholder="Name:"/>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <input type="email" class="form-control custom-input" id="email" name="email"
                                           value="" placeholder="Email:"/>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                        <textarea class="form-control custom-textarea" id="message:" name="message:"
                                                  rows="3" placeholder="Message:"></textarea>
                                </div>
                            </div>

                            <button class="btn submit-btn">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="blog_post">
                    <div class="form-row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12 block" app-section-column="category">
                            <div class="category">
                                <h4 class="caption">Category</h4>
                                <div class="category-list mt-4">
                                    <ul class="list">
                                        <li><a href="#">Fresh Ingredients</a></li>
                                        <li><a href="#">Thread With Brace</a></li>
                                        <li><a href="#">Pasta With Ragu</a></li>
                                        <li><a href="#">Grilled Fish</a></li>
                                        <li><a href="#">Fresh Ingredients</a></li>
                                        <li><a href="#">Thread With Brace</a></li>
                                        <li><a href="#">Pasta With Ragu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 block" app-section-column="popular-tags">
                            <div class="popular-tag">
                                <h4 class="caption">Popular Tags</h4>
                                <div class="tag-list mt-4">
                                    <ul>
                                        <li><a href="#">Food</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Chicken Food</a></li>
                                        <li><a href="#">Health Care</a></li>
                                        <li><a href="#">Beef Burger</a></li>
                                        <li><a href="#">Take Away</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12 block" app-section-column="recent-post">
                            <div class="recent-post">
                                <h4>Recent Post</h4>
                                <div class="recent d-flex align-items-center mt-4">
                                    <div class="recent-img">
                                        <a href="#"> <img src="src/img/recent1.png" class="w-100" alt=""/></a>
                                    </div>
                                    <div class="recent-content ml-3">
                                        <span class="date">25 Auguest, 2020</span>
                                        <a href="#" class="c-link">Grilled port the sample file ship with theme.</a>
                                    </div>
                                </div>

                                <div class="recent d-flex align-items-center mt-4">
                                    <div class="recent-img">
                                        <a href="#"><img src="src/img/recent2.png" class="w-100" alt=""/></a>
                                    </div>

                                    <div class="recent-content ml-3">
                                        <span class="date">25 Auguest, 2020</span>
                                        <a href="#" class="c-link">Grilled port the sample file ship with theme.</a>
                                    </div>
                                </div>

                                <div class="recent d-flex align-items-center mt-4">
                                    <div class="recent-img">
                                        <a href="#"> <img src="src/img/recent3.png" class="w-100" alt=""/></a>
                                    </div>
                                    <div class="recent-content ml-3">
                                        <span class="date">25 Auguest, 2020</span>
                                        <a href="#" class="c-link">Grilled port the sample file ship with theme.</a>
                                    </div>
                                </div>

                                <div class="recent d-flex align-items-center mt-4">
                                    <div class="recent-img">
                                        <a href="#"> <img src="src/img/recent4.png" class="w-100" alt=""/></a>
                                    </div>
                                    <div class="recent-content ml-3">
                                        <span class="date">25 Auguest, 2020</span>
                                        <a href="#" class="c-link">Grilled port the sample file ship with theme.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "./includes/footer.phtml"?>
</body>

</html>