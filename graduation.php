    <?php
      // PHP variables for PHP include files
      $title = 'Portfolio | Prairie Oak Photography';
      $pageTitle = 'Graduation';
      $arrows = true;
      $portfolio = true;

      // HEADER
      include('inc/header.php');
    ?>


    <!-- PAGE CONTAINER -->
    <div class="page-container">


      <!-- PAGE TITLE -->
      <?php include('inc/pageTitle.php');?>


      <!-- GRADUATION IMAGES -->
      <img class="portfolio-img" src="img/graduation/grad-01.jpg" alt="girl in dress sitting on fallen tree trunk in woods" />
      <img class="portfolio-img" src="img/graduation/grad-02.jpg" alt="smiling girl spinning in dress in natural background" />
      <img class="portfolio-img" src="img/graduation/grad-03.jpg" alt="smiling girl in dress leaning on fallen wood branches" />
      <img class="portfolio-img" src="img/graduation/grad-04.jpg" alt="girl in dress in posing in woods" />
      <img class="portfolio-img" src="img/graduation/grad-05.jpg" alt="smiling girl in dress leaning up against tree" />
      <img class="portfolio-img" src="img/graduation/grad-06.jpg" alt="smiling girl in dress posing in natural background" />
      <img class="portfolio-img" src="img/graduation/grad-07.jpg" alt="close up face shot of dressed up girl" />
      <img class="portfolio-img" src="img/graduation/grad-08.jpg" alt="smiling boy dressed in graduation gown leaning up against tree" />
      <img class="portfolio-img" src="img/graduation/grad-09.jpg" alt="smiling boy in suit and tie leaning up against tree" />
      <img class="portfolio-img" src="img/graduation/grad-10.jpg" alt="girl in dress holding bow and arrow in old rustic barn" />
      <img class="portfolio-img" src="img/graduation/grad-11.jpg" alt="girl in dress posing in natural background" />
      <img class="portfolio-img" src="img/graduation/grad-12.jpg" alt="girl holding her dress posing in natural background" />
      <!-- /GRADUATION IMAGES -->

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
