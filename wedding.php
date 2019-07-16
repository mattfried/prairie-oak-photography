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


      <!-- WEDDING IMAGES -->
      <img class="portfolio-img" src="img/wedding/wed-01.jpg" alt="newlyweds holding hands infront of wedding doors" />
      <img class="portfolio-img" src="img/wedding/wed-02.jpg" alt="couple holding eachother in the middle of long outdoor wood staircase" />
      <img class="portfolio-img" src="img/wedding/wed-03.jpg" alt="couple leaning in for kiss along pathway in forest" />
      <img class="portfolio-img" src="img/wedding/wed-04.jpg" alt="newlyweds holding eachother close with eyes closed" />
      <img class="portfolio-img" src="img/wedding/wed-05.jpg" alt="bride and groom wedding party" />
      <img class="portfolio-img" src="img/wedding/wed-06.jpg" alt="couple holding each other in woods leaning against old wood shed" />
      <img class="portfolio-img" src="img/wedding/wed-07.jpg" alt="newlyweds holding each other along ocean" />
      <img class="portfolio-img" src="img/wedding/wed-08.jpg" alt="newlyweds holding each other on ocean shore beach" />
      <img class="portfolio-img" src="img/wedding/wed-09.jpg" alt="bridal party posing on rocks along a creek" />
      <img class="portfolio-img" src="img/wedding/wed-10.jpg" alt="bride wrapping arms around her groom from behind" />
      <img class="portfolio-img" src="img/wedding/wed-11.jpg" alt="newlyweds kissing in wooded backyard" />
      <img class="portfolio-img" src="img/wedding/wed-12.jpg" alt="newlyweds standing close touching foreheads" />
      <img class="portfolio-img" src="img/wedding/wed-13.jpg" alt="newlyweds standing close on ocean shore beach" />
      <img class="portfolio-img" src="img/wedding/wed-14.jpg" alt="bride wrapping arms around her broom in large culvert" />
      <img class="portfolio-img" src="img/wedding/wed-15.jpg" alt="newlyweds holding eachother in wheat field" />
      <!-- /WEDDING IMAGES -->

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
