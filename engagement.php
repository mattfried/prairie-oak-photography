    <?php
      // PHP variables for PHP include files
      $title = 'Portfolio | Prairie Oak Photography';
      $pageTitle = 'Engagement';
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
      <img class="portfolio-img" src="img/engagement/eng-01.jpg" alt="engaged couple holding each other laughing in snowy field" />
      <img class="portfolio-img" src="img/engagement/eng-02.jpg" alt="engaged couple sitting on square hay bail kissing each other" />
      <img class="portfolio-img" src="img/engagement/eng-03.jpg" alt="bride to be holding her ring and letters in hand which spell love" />
      <img class="portfolio-img" src="img/engagement/eng-04.jpg" alt="engaged couple holding each other close in snowy field" />
      <img class="portfolio-img" src="img/engagement/eng-05.jpg" alt="engagement ring hanging on pine cones laying on snowy ground" />
      <img class="portfolio-img" src="img/engagement/eng-06.jpg" alt="engaged couple holding each other laughin in snowy field" />
      <img class="portfolio-img" src="img/engagement/eng-07.jpg" alt="engaged couple standing in snowy field snuggling under warm blanket" />
      <img class="portfolio-img" src="img/engagement/eng-08.jpg" alt="engaged couple kissing under blanket while holding dog" />
      <img class="portfolio-img" src="img/engagement/eng-09.jpg" alt="engaged couple sitting in snowy field gazing into each others eyes" />
      <img class="portfolio-img" src="img/engagement/eng-10.jpg" alt="engaged couple standing in snowy field under warm blanket" />
      <img class="portfolio-img" src="img/engagement/eng-11.jpg" alt="engaged couple holding each other close uner warm blanket in snowy field" />
      <img class="portfolio-img" src="img/engagement/eng-12.jpg" alt="engaged couple holding each other close in snowy field" />
      <!-- /ENGAGEMENT IMAGES -->

      <!--  PREVIEW ROW  -->
      <!-- (need to match # of 'rect' <span> elements to the # of IMAGES) -->
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
