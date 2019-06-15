    <?php
      // PHP variables for PHP include files
      $title = 'Portfolio | Prairie Oak Photography';
      $pageTitle = 'Newborn';
      $arrows = true;
      // HEADER
      include('inc/header.php');
    ?>


    <!-- PAGE CONTAINER -->
    <div class="page-container">


      <!-- PAGE TITLE -->
      <?php include('inc/pageTitle.php');?>


      <!-- ENGAGEMENT IMAGES -->
      <img class="portfolio-img" src="img/newborn/newborn-01.jpg" alt="" />
      <img class="portfolio-img" src="img/newborn/newborn-02.jpg" alt="" />
      <img class="portfolio-img" src="img/newborn/newborn-03.jpg" alt="" />
      <img class="portfolio-img" src="img/newborn/newborn-04.jpg" alt="" />
      <img class="portfolio-img" src="img/newborn/newborn-05.jpg" alt="" />
      <img class="portfolio-img" src="img/newborn/newborn-06.jpg" alt="" />
      <img class="portfolio-img" src="img/newborn/newborn-07.jpg" alt="" />
      <img class="portfolio-img" src="img/newborn/newborn-08.jpg" alt="" />
      <img class="portfolio-img" src="img/newborn/newborn-09.jpg" alt="" />
      <img class="portfolio-img" src="img/newborn/newborn-10.jpg" alt="" />
      <img class="portfolio-img" src="img/newborn/newborn-11.jpg" alt="" />
      <img class="portfolio-img" src="img/newborn/newborn-12.jpg" alt="" />
      <!-- /ENGAGEMENT IMAGES -->

      <!--  PREVIEW ROW (need to match # of 'rect' <span> elements to the # of IMAGES)  -->
      <div class="preview-row">
        <span class="preview target"></span>
        <span class="preview"></span>
        <span class="preview"></span>
        <span class="preview"></span>
        <span class="preview"></span>
        <span class="preview"></span>
        <span class="preview"></span>
        <span class="preview"></span>
        <span class="preview"></span>
        <span class="preview"></span>
        <span class="preview"></span>
        <span class="preview"></span>
      </div>
      <!--  /PREVIEW ROW  -->


    </div>
    <!-- / PAGE CONTAINER -->


    <!-- FOOTER -->
    <?php include('inc/footer.php');?>


    <script src="script/portfolioApp.js"></script>
  </body>

</html>