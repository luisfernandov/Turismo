<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h4>Suscríbete a nuestra revista</h4>
          <p>Ingresa tu correo y reciviras semanalmente la revista de nuestra facultad</p>
        </div>
        <div class="col-lg-6">
          <form action="<?=base_url?>Suscriptores/save" method="post">
            <input type="email" name="email"><input type="submit" value="Suscribirme">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Otros enlaces</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos y Condiciones</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Politicas de privacidad</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-contact">
          <h4>Contactanos</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Telefono:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

        <div class="col-lg-4 col-md-6 footer-info">
          <h3>Nuestras redes sociales</h3>
          <p>Siguenos en nuestras redes sociales para enterarte de todas las novedades que tenemos para tí.</p>
          <div class="social-links mt-3">
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>SisFern</span></strong>. Todos los derechos reservados
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
      Diseñado por <a href="https://bootstrapmade.com/">VFernando</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="<?=base_url?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?=base_url?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?=base_url?>assets/vendor/venobox/venobox.min.js"></script>
<script src="<?=base_url?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?=base_url?>assets/vendor/counterup/counterup.min.js"></script>
<script src="<?=base_url?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?=base_url?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?=base_url?>assets/vendor/aos/aos.js"></script>


<!-- Template Main JS File -->
<script src="<?=base_url?>assets/js/main.js"></script>
<script src="<?=base_url?>assets/js/script.js"></script>

</body>

</html>
