<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <title>Welcom back | Login</title>
    <?php require_once "./includes/head.phtml" ?>
</head>

<body app-name="login">

    <div class="row form-section login fixed-height">

        <div class="advert-container  col-sm-12 col-md-6 col-lg-6 col-xl-6" data-section="adverts">
            <div class="overlay">
                <div class="ad-nav pl-5 pt-2">
                    <div class="logo">
                        <a href="<?= "./" ?>" class="link">
                            <img src="./src/img/icons/logo.svg" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="body d-flex align-items-center justify-content-center p-5">
                    <div class="img-caption mt-3">
                        <h3 title="Cup cake recipes" class="caption">
                            What are procedures in baking a cupcake? <a href="#" class="text-link small">let's see</a></h3>
                    </div>

                </div>
            </div>
        </div>

        <div class="form-container col-sm-12 col-md-6 col-lg-6 col-xl-6" data-section="form-field">

            <form class="form p-4">
                <fieldset class="form-group text-center col-xl-6 m-auto">
                    <h4 class="form-caption">
                        Welcome Back
                    </h4>

                    <p class="text-muted form-info">
                        I don't have an account? <a href="register" class="text-link">Register</a>
                    </p>
                </fieldset>

                <fieldset class="fieldset mt-5 w-100 mt-5 col-xl-10 m-auto" title="personal information">
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-10 col-md-10 col-xl-10">
                            <input type="email" name="email" id="email" class="form-control" required>
                            <label for="Name" class="label">Email</label>
                        </div>

                        <div class="form-group col-sm-10 col-md-10 col-xl-10">
                            <input type="password" class="form-control" name="password" id="password" required>
                            <label for="password" class="label">Password</label>
                        </div>
                    </div>

                    <div class="row mt-3 flex-column justify-content-center align-items-center">
                        <button class="btn col-sm-10 col-md-7 col-xl-7 submit-btn" id="register">Login</button>

                        <p class="text-mute mt-4 mb-0">Or
                        </p>

                        <div class="social-btn-list mt-4 justify-content-center row">
                            <a href="#" class="btn-icon g">
                                <button type="button" data-auth="google" class="btn btn-danger circle">
                                    <i class=" ri-google-line"></i>
                                </button>
                                <span class="txt ml-3">Sig in with Google</span>
                            </a>

                            <a href="#" class="btn-icon f">
                                <button type="button" data-auth="facebook" class="btn btn-primary circle">
                                    <i class=" ri-facebook-line"></i>
                                </button>
                                <span class="txt ml-3"> Sign with Facebook</span>
                            </a>
                        </div>
                    </div>
                </fieldset>


            </form>

        </div>

    </div>

    <?php require_once "./includes/footer-links.phtml" ?>

</body>