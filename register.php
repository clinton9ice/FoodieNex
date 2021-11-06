<!DOCTYPE html>
<html lang="en">

<head>
    <title>Let's Get Started Creating Your Account | Register</title>
    <?php require_once "./includes/head.phtml" ?>
</head>

<body app-name="register">

    <div class="row form-section fixed-height">

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
                    <div class="img-wrapper">
                        <img src="" alt="">
                    </div>

                    <div class="img-caption mt-3">
                        <h3 title="free recipes" class="caption">Join us and explore amazing recipe offers for <span class="text-orange">free</span></h3>
                    </div>

                </div>
            </div>
        </div>

        <div class="form-container col-sm-12 col-md-6 col-lg-6 col-xl-6" data-section="form-field">

            <form class="form p-4">
                <fieldset class="form-group">
                    <h4 class="form-caption">
                        Get Started
                    </h4>

                    <p class="text-muted form-info">
                        Already have an account? <a href="login" class="text-link">login</a>
                    </p>
                </fieldset>

                <fieldset class="fieldset mt-5 w-100 mt-5" title="personal information">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                            <input type="text" name="name" id="Name" class="form-control" required>
                            <label for="Name" class="label">Full Name</label>
                        </div>

                        <div class="form-group col-sm-12 col-md-6 col-xl-6">
                            <input type="email" class="form-control" name="email" id="Email" required>
                            <label for="Email" class="label">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xl-12">
                            <input list="country-list" class="form-control" name="country" id="country" required>
                            <label for="country" class="label">Country</label>
                            <datalist id="country-list">
                                <option value="America"></option>
                                <option value="Dubai"></option>
                                <option value="Ghana"></option>
                                <option value="Germany"></option>
                                <option value="Nigeria"></option>
                            </datalist>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xl-12">
                            <input type="password" class="form-control" name="password" id="password" required>
                            <label for="password" class="label">Password</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-xl-12">
                            <input type="password" class="form-control" name="cpasswrd" id="cpasswrd" required>
                            <label for="cpasswrd" class="label">Confirm Password</label>
                        </div>
                    </div>

                </fieldset>

                <div class="row mt-3 flex-column justify-content-center align-items-center">
                    <button class="btn col-sm-10 col-md-7 col-xl-7 submit-btn" id="register">Register</button>

                    <p class="text-mute mt-4 mb-0">Or
                    </p>

                    <div class="social-btn-list mt-4">
                        <button type="button" data-auth="google" class="btn btn-danger circle">
                            <i class=" ri-google-line"></i>
                        </button>

                        <button type="button" data-auth="facebook" class="btn btn-primary circle">
                            <i class=" ri-facebook-line"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <?php require_once "./includes/footer-links.phtml" ?>
</body>

</html>