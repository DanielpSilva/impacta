 <script src="public/js/jquery-3.3.1.min.js"></script>
  <script src="public/js/jquery-ui.js"></script>
  <script src="public/js/popper.min.js"></script>
 
  <script src="public/js/owl.carousel.min.js"></script>
  <script src="public/js/jquery.countdown.min.js"></script>
  <script src="public/js/bootstrap-datepicker.min.js"></script>
  <script src="public/js/jquery.easing.1.3.js"></script>
  <script src="public/js/aos.js"></script>
  <script src="public/js/jquery.fancybox.min.js"></script>
  <script src="public/js/jquery.sticky.js"></script>

  
  <script src="public/js/main.js"></script>



  <?php if (isset($scripts)) {
      foreach ($scripts as $script_name){
        $src = base_url() . "public/js/" . $script_name; ?>
        <script src="<?=$src?>"></script>
        <?php
      }
    } ?>


  </body>
</html>