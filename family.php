    <?php
      // PHP variables for PHP include files
      $title = 'Portfolio | Prairie Oak Photography';
      $pageTitle = 'Family';
      $arrows = true;
      $portfolio = true;

      // HEADER
      include('inc/header.php');
    ?>


    <!-- PAGE CONTAINER -->
    <div class="page-container">


      <!-- PAGE TITLE -->
      <?php include('inc/pageTitle.php');?>


      <!-- FAMILY IMAGES -->
      <img class="portfolio-img" src="img/family/fam-01.jpg" alt="family sitting in snowy field" />
      <img class="portfolio-img" src="img/family/fam-02.jpg" alt="husband and wife kissing in Christmas tree field with children held and on shoulders" />
      <img class="portfolio-img" src="img/family/fam-03.jpg" alt="husband and wife swinging children in the snow" />
      <img class="portfolio-img" src="img/family/fam-04.jpg" alt="family sitting on brick walkway with stone wall behind" />
      <img class="portfolio-img" src="img/family/fam-05.jpg" alt="family standing on loading dock infront of brick wall" />
      <img class="portfolio-img" src="img/family/fam-06.jpg" alt="family snuggling under blanket in a cold winter field" />
      <img class="portfolio-img" src="img/family/fam-07.jpg" alt="husband and wife holding children in snowy field" />
      <img class="portfolio-img" src="img/family/fam-08.jpg" alt="young boy walking assisted over fall leaves with the help of mom and dad" />
      <img class="portfolio-img" src="img/family/fam-09.jpg" alt="husband wife and dog posing in a park" />
      <img class="portfolio-img" src="img/family/fam-10.jpg" alt="family gathered in shallow water with mom and dad kissing" />
      <img class="portfolio-img" src="img/family/fam-11.jpg" alt="family sitting on stone steps cuddling eachother" />
      <img class="portfolio-img" src="img/family/fam-12.jpg" alt="young brothers posing infront of old stone wall" />
      <img class="portfolio-img" src="img/family/fam-13.jpg" alt="family sitting by a fire in distant campground" />
      <img class="portfolio-img" src="img/family/fam-14.jpg" alt="young boy holding hands with grandma and grandpa" />
      <img class="portfolio-img" src="img/family/fam-15.jpg" alt="multi generational family photo in backyard" />
      <!-- /FAMILY IMAGES -->

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
