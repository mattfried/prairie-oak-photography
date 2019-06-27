    <?php
      // PHP variables for PHP include files
      $title = 'Portfolio | Prairie Oak Photography';
      $pageTitle = 'Wedding';
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
      <img class="portfolio-img" src="img/sample1.jpeg" alt="" />
      <img class="portfolio-img" src="img/sample2.jpeg" alt="" />
      <img class="portfolio-img" src="img/sample3.jpeg" alt="" />
      <!-- /ENGAGEMENT IMAGES -->

      <!--  PREVIEW ROW (need to match # of 'rect' <span> elements to the # of IMAGES)  -->
      <div class="preview-row">
        <span class="preview target"></span>
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
