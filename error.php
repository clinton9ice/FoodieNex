<!DOCTYPE html>
<html class="no-js" lang="en-US">
<head>
    <title>404-error | FoodieNex</title>
    <?php require_once "./includes/head.phtml"?>
</head>

<body app-name="error-page">
    <div class="error-section pt-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="error text-center">
                        <div class="error-img">
                            <img src="src/img/404_Error.png" class="w-100 img-fluid" alt="" />
                        </div>
                        <div class="error-content col-sm-12 col-md-7 col-lg-7 col-xl-7m m-auto">
                            <h3 class="error-title"> Page not found.</h3>
                            <p class="error-description">The link you are looking for has been removed or wrong.</p>
                            <a href="<?= "./"?>" class="error-btn btn text-center">
                                <i class="icofont-double-left"></i>
                                <span class="ml-2">Return Home</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>