
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Fredo<span class="text-white">Ware</span></h1>
                    <p>Innovate, Create, Dominate. Designing your digital success story.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="#aboutUs">About Us</a>
                    <a class="btn btn-link" href="#projects">Projects</a>
                    <a class="btn btn-link" href="#offers">Offers</a>
                    <a class="btn btn-link" href="#members">Members</a>
                    <a class="btn btn-link" href="#contactUs">Contact Us</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="https://fredoware.com">Fredoware</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://fredoware.com">Fredoware Software Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$ROOT_DIR;?>templates/source/wow.min.js"></script>
    <script src="<?=$ROOT_DIR;?>templates/source/easing.min.js"></script>
    <script src="<?=$ROOT_DIR;?>templates/source/waypoints.min.js"></script>
    <script src="<?=$ROOT_DIR;?>templates/source/owl.carousel.min.js"></script>
    <script src="<?=$ROOT_DIR;?>templates/source/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=$ROOT_DIR;?>templates/source/main.js"></script>
</body>

</html>



<script type="text/javascript">



<?php if ($success): ?>
	Swal.fire({
		title: "Success",
		text: "<?=$success;?>",
		icon: "success"
		});
<?php endif; ?>


<?php if ($error): ?>
	Swal.fire({
		title: "Error",
		text: "<?=$error;?>",
		icon: "error"
		});
<?php endif; ?>
</script>
