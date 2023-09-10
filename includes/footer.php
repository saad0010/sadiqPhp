<!-- middle -->
<section class="midd-w3 py-5" id="quote">
    <div class="container py-xl-5 py-lg-3">
        <div class="row">
            <div class="col-lg-12 about-faq1 ">
                <h6>Send Us Your Artwork For Free Quote!</h6>
                <h3 class="text-da">What You Can Save?</h3>
                <p class="mt-4">Free Quote | Free Digitizing & Sampling | Free Shipping</p>

                <a href="contact.php" class="btn button-style button-style-2 mt-sm-5 mt-4">Let's Talk</a>
            </div>

        </div>
    </div>
</section>
<!-- //middle -->


<!-- footer -->
<footer class="bg-li py-5">
    <div class="container py-xl-5 py-lg-3">
        <!-- subscribe -->
        <div class="subscribe mx-auto">
            <div class="icon-effect-w3">
                <span class="fa fa-envelope"></span>
            </div>
            <h2 class="tittle text-center font-weight-bold">Stay Connected !</h2>
            <p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">From Our Digital Marketing To Yours.</p>
            <form action="#" method="post" class="subscribe-wthree pt-2">
                <div class="d-flex subscribe-wthree-field">
                    <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
                    <button class="btn form-control w-50" type="submit">Subscribe</button>
                </div>
            </form>
        </div>
        <!-- //subscribe -->
    </div>
</footer>
<!-- //footer -->

<!-- //copyright bottom -->
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4 text-white" style="background-color: #21D192">
            <!-- Left -->

            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row  mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 mob col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase text-primary display-4 fw-bold text-left">Digi Patch Solutions</h6>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 fservice  col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase  text-primary fw-bold mb-4 text-center">Services</h6>
                        <p class="text-center">
                            <a href="patches.php" class="text-success">Patches</a>
                        </p>
                        <p class="text-center">
                            <a href="digitizing.php" class="text-success">Digitizing</a>
                        </p>
                        <p class="text-center">
                            <a href="raster.php" class="text-success">Rastor To Vector </a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 fservice col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase text-primary fw-bold  mb-4 text-center">Company</h6>
                        <p class="text-center">
                            <a href="about.php" class="text-success ">About Us</a>
                        </p>
                        <p class="text-center">
                            <a href="pricing.php" class="text-success">Pricing</a>
                        </p>
                        <p class="text-center">
                            <a href="contact.php" class="text-success">Contact Us</a>
                        </p>
                        <p class="text-center">
                            <a href="faq.php" class="text-success">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 fservice col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold text-primary mb-4 text-center">Contact</h6>

                        <h5 class="text-left  text-dark mb-3"><i class="fa fa-location-arrow mr-3  "></i> 2400
                            Siskiyou
                            Street Lewisville, Texas 75056
                        </h5>


                        <h5 style="font-size: .9rem; font-weight:bold;" class="text-center  text-dark mb-4 mt-4 mr-2">
                            <i class="fa fa-envelope-o mf "></i>
                            info@digipatchsolutions.com
                        </h5>

                        <h5 style="font-weight: bold;" class="text-left text-dark mb-2"><i class="fa fa-phone-square mr-3 "></i> +1-347-474-0030
                        </h5>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:
            <span class="text-dark">Digi Patch Solutions</span>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Whatsapp button -->
    <div class="whatsappImage">
        <a target="_blank" href="https://wa.me/13474740030"> <img src="images/whatsapp.jpg" alt="whatsapp image"></a>
    </div>
    <!-- / Whatsapp button -->

    <!-- Popup -->
    <div class="popup">
        <button id="close" class="close-btn">&times;</button>

        <div class="contentpop">
            <h2>Subscribe & Enjoy</h2>
            <h3>10 % OFF</h3>
            <p>Join our email list and be first to know about exciting sales, giftings and more.</p>
        </div>

        <div class="form">
            <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
            <button class="btn form-control w-50" type="submit">Subscribe</button>
        </div>


    </div>
    <!-- /Popup -->
</div>

<!-- End of .container -->

<script type="text/javascript">
    var counter = 1;
    setInterval(function() {
        document.getElementById('radio' + counter).checked = true;

        counter++;
        if (counter > 4) {
            counter = 1;
        }
    }, 5000);
</script>







<script>
    $(document).ready(function() {
        console.log(window.location.href);
        window.addEventListener("load", function() {
            setTimeout(
                function open(event) {
                    document.querySelector(".popup").style.display = "block";
                    document.body.classList.add("active-popup");
                },
                500
            )
        });

        document.querySelector("#close").addEventListener("click", function() {
            document.querySelector(".popup").style.display = "none";
            document.body.classList.remove("active-popup");
        });
    })
</script>
<!-- lightbox -->
<script src="lightbox-plus-jquery.js"></script>
</body>

</html>