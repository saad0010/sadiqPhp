<?php include_once "save.php" ?>
<?php include 'includes/header.php'; ?>
<?php
if ($name_error != null) {
?> <style>
        .name-error {
            display: block;
            margin-top: 25px;
            margin-bottom: 0px;
        }
    </style> <?php
            }
            if ($mobile_error != null) {
                ?> <style>
        .mobile-error {
            display: block;
            margin-top: 25px;
            margin-bottom: 0px;
        }
    </style> <?php
            }
            if ($email_error != null) {
                ?> <style>
        .email-error {
            display: block;
            margin-top: 25px;
            margin-bottom: 0px;
        }
    </style> <?php
            }
            if ($message_error != null) {
                ?> <style>
        .message-error {
            display: block;
            margin-top: 25px;
            margin-bottom: 0px;
        }
    </style> <?php
            }
            if ($success != null) {
                ?> <style>
        .success {
            display: block;
            margin-top: 25px;
            margin-bottom: 0px;
        }
    </style> <?php
            }
                ?>

<!-- banner -->
<div class="banner_w3lspvt-2">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html" class="font-weight-bold">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Contact Us</li>
    </ol>
</div>
<!-- //banner -->
</div>
<!-- //main banner -->

<!-- contact -->
<div class="contact" id="contact">
    <div class="container pb-xl-5 pb-lg-3">
        <div class="row">
            <div class="col-lg-6">
                <div class="contu">

                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold text-primary mb-4 text-left mt-4" style="color: #705ecf !important;">
                        Contact</h6>

                    <h5 class="text-left text-dark mb-2"><i class="fa fa-phone-square mr-3 "></i> +1-347-474-0030
                    </h5>

                    <h5 style="font-size: 1.2rem; margin-top:2rem;" class="text-left  text-dark mb-4  "><i class="fa fa-envelope-o  mll"></i>
                        info@digipatchsolutions.com
                    </h5>
                    <h5 style="font-size: 1.2rem;" class="text-left  text-dark mb-4 mt-4 "><i class="fa fa-envelope-o  mll"></i>
                        sales@digipatchsolutions.com
                    </h5>


                    <h6 class="text-uppercase fw-bold text-primary mb-4  text-left mtt" style="color: #705ecf !important;">Based in</h6>
                    <h5 class="text-left text-dark mb-3"><i class="fa fa-location-arrow mr-3  "></i> 2400 Siskiyou
                        Street Lewisville, Texas 75056
                    </h5>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <!-- contact form grid -->
                <div class="contact-top1">
                    <form action="" method="POST" class="contact-wthree-do">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        Full Name
                                    </label>
                                    <input class="form-control" type="text" placeholder="Name ..." value="<?php echo $name; ?>" name="name">
                                    <p class="error name-error"><?php echo $name_error; ?></p>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>
                                        Mobile
                                    </label>
                                    <input class="form-control" type="text" placeholder="xxxx xxxx xx" value="<?php echo $mobile; ?>" name="mobile">
                                    <p class="error mobile-error"><?php echo $mobile_error; ?></p>
                                </div>
                                <div class="col-md-6 mt-md-0 mt-4">
                                    <label>
                                        Email
                                    </label>
                                    <input class="form-control" type="email" placeholder="example@mail.com" value="<?php echo $email; ?>" name="email">
                                    <p class="error email-error"><?php echo $email_error; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        Your message
                                    </label>
                                    <textarea placeholder="Add your Message here" value="<?php echo $message; ?>" name="message" class="form-control"></textarea>
                                    <p class="error message-error"><?php echo $message_error; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        Recaptcha
                                    </label>
                                    <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" name="contact-form" class="btn btn-cont-w3 btn-block mt-4">Send</button>
                                <p class="success"><?php echo $success; ?></p>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- //contact form grid ends here -->
            </div>
        </div>
    </div>
</div>
<!-- //contact-->

<!-- map -->
<div class="w3l-map p-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.1939061600647!2d-96.92012711949293!3d33.05136150535112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c255be391c521%3A0xa5cccd5464a47e64!2s2400%20Siskiyou%20St%2C%20Lewisville%2C%20TX%2075056%2C%20USA!5e0!3m2!1sen!2s!4v1694378053604!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- //map -->

<?php include 'includes/footer.php'; ?>