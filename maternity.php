<?php
  // PHP variables for PHP include files
  $title = 'Portfolio | Prairie Oak Photography';
  $pageTitle = 'Maternity';
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
  <img class="portfolio-img" src="img/maternity/mat-01.jpg" alt="husband holding pregnant wife's belly in woods" />
  <img class="portfolio-img" src="img/maternity/mat-02.jpg" alt="husband holding pregnant wife's belly in woods" />
  <img class="portfolio-img" src="img/maternity/mat-03.jpg" alt="husband holding pregnant wife's belly sitting in snowy woods" />
  <img class="portfolio-img" src="img/maternity/mat-04.jpg" alt="husband holding pregnant wife's belly in snowy woods" />
  <img class="portfolio-img" src="img/maternity/mat-05.jpg" alt="pregnant woman holding her belly in snowy field" />
  <img class="portfolio-img" src="img/maternity/mat-06.jpg" alt="pregnant woman holding her belly in woods" />
  <img class="portfolio-img" src="img/maternity/mat-07.jpg" alt="husband and pregnant wife sitting by water in city park" />
  <img class="portfolio-img" src="img/maternity/mat-08.jpg" alt="husband and pregnant wife laughing and sitting by water in city park" />
  <img class="portfolio-img" src="img/maternity/mat-09.jpg" alt="husband and pregnant wife standing in snowy woods" />
  <img class="portfolio-img" src="img/maternity/mat-10.jpg" alt="husband kissing pregnant wife standing in snowy woods" />
  <img class="portfolio-img" src="img/maternity/mat-11.jpg" alt="husband holding pregnant wife in woods" />
  <img class="portfolio-img" src="img/maternity/mat-12.jpg" alt="husband kissing and holding pregnant wife by tree shrubs" />
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
