    <?php
      // PHP variables for PHP include files
      $title = 'Portfolio | Prairie Oak Photography';
      $pageTitle = 'Newborn';
      $arrows = true;
      $portfolio = true;

      // HEADER
      include('inc/header.php');
    ?>


    <!-- PAGE CONTAINER -->
    <div class="page-container">


      <!-- PAGE TITLE -->
      <?php include('inc/pageTitle.php');?>


      <!-- ENGAGEMENT IMAGES -->
      <img class="portfolio-img" src="img/newborn/newborn-01.jpg" alt="husband and wife holding baby wrapped in blanket" />
      <img class="portfolio-img" src="img/newborn/newborn-02.jpg" alt="sleeping baby on thick folded blanket" />
      <img class="portfolio-img" src="img/newborn/newborn-03.jpg" alt="sleeping baby wrapped in blacket" />
      <img class="portfolio-img" src="img/newborn/newborn-04.jpg" alt="husband and wife holding baby wrapped in blanket" />
      <img class="portfolio-img" src="img/newborn/newborn-05.jpg" alt="husband and wife holding baby wrapped in blanket" />
      <img class="portfolio-img" src="img/newborn/newborn-06.jpg" alt="husband and wife kissing sleeping babys head" />
      <img class="portfolio-img" src="img/newborn/newborn-07.jpg" alt="sleeping baby wrapped in blanket in basket" />
      <img class="portfolio-img" src="img/newborn/newborn-08.jpg" alt="sleeping baby swaddled in blanket" />
      <img class="portfolio-img" src="img/newborn/newborn-09.jpg" alt="sleeping baby in diaper" />
      <img class="portfolio-img" src="img/newborn/newborn-10.jpg" alt="husband and wife holding crying baby" />
      <img class="portfolio-img" src="img/newborn/newborn-11.jpg" alt="husband and wife holding baby and dog" />
      <img class="portfolio-img" src="img/newborn/newborn-12.jpg" alt="family sitting on bed with crying baby" />
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
