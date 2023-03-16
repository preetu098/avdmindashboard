<?php
session_start();
if ($_SESSION["ID"] > 0) {
include 'connection.php';
include("header.php");
?>
  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg" style="background-color: rgb(205, 27, 27);">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
              <h3 style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong></h3>
              <p style="color: white;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Game<i
                      class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia praesentium illum asperiores aut
                      totam? Quis fuga sint cumque quia quibusdam?
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Game<i
                      class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia praesentium illum asperiores aut
                      totam? Quis fuga sint cumque quia quibusdam?
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Game<i
                      class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia praesentium illum asperiores aut
                      totam? Quis fuga sint cumque quia quibusdam?
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
            style='background-image: url("https://bonobono.b-cdn.net/wp-content/uploads/2022/08/the-Aviator-casino-game-on-mobile.png");'
            data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: rgb(205, 27, 27);">



    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Modern Technology</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/aos/aos.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="asset/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>

  </body>

  </html>
<?php } else {

  header("Location:login.php");
}
?>