<!-- header start -->

<?php include 'header.php';?>

<!-- header close -->


<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-7">
    <div class="container">
        <div class="page-banner-content">
            <h2>Contact Us</h2>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Contact
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->


<!-- section new -->

<!-- section new -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">

            <!-- Call -->
            <div class="col-md-4">
                <div class="h-100 bg-white text-center p-4 rounded shadow-sm d-flex flex-column justify-content-center">
                    <i class="fa fa-phone fa-2x mb-3 text-dark"></i>
                    <h5 class="fw-semibold">Call Us</h5>
                    <p class="mb-0">+91 6363878450</p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-4">
                <div class="h-100 bg-white text-center p-4 rounded shadow-sm d-flex flex-column justify-content-center">
                    <i class="fa fa-envelope fa-2x mb-3 text-dark"></i>
                    <h5 class="fw-semibold">Email Us</h5>
                    <p class="mb-0">info@starconnectautomation.com</p>
                     <p class="mb-0">qudstechnologies@gmail.com</p>
                </div>
            </div>

            <!-- Address -->
            <div class="col-md-4">
                <div class="h-100 bg-white text-center p-4 rounded shadow-sm d-flex flex-column justify-content-center">
                    <i class="fa fa-map-marker fa-2x mb-3 text-dark"></i>
                    <h5 class="fw-semibold">Visit Us</h5>
                    <p class="mb-0 small">
                        # 6/2-3, Minerva Mill Back Side,
                        Gopalapura, Magadi Road,
                        Bangalore - 23
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- section new close -->



<!-- section new close -->

<!--=== Start Contact Section ===-->
<div class="contact-section py-5">
    <div class="container">
        <div class="contact-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form ptb-100">
                        <h2>We Are Always Ready To Solution Your All Problem.</h2>

                        <form class="form-contact" action="send-mail.php" method="POST" onsubmit="showLoader()">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <input type="text" name="subject" class="form-control"
                                        placeholder="Contact Subject">
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <textarea name="message" rows="5" class="form-control" placeholder="Message"
                                        required></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="main-btn" id="submitBtn">
                                        <span id="btnText">Send Message</span>
                                        <span id="loader" style="display:none;">Sending...</span>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3887.882188641992!2d77.55723957507661!3d12.97938628733669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTLCsDU4JzQ1LjgiTiA3N8KwMzMnMzUuMyJF!5e0!3m2!1sen!2sin!4v1769585153055!5m2!1sen!2sin"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Contact Section ===-->

<!-- footer start -->

<?php include 'footer.php';?>

<!-- footer close -->


<script>
function showLoader() {
    document.getElementById("btnText").style.display = "none";
    document.getElementById("loader").style.display = "inline-block";
    document.getElementById("submitBtn").disabled = true;
}
</script>