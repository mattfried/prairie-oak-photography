    <?php
      // PHP variables for PHP include files
      $title = 'Prairie Oak Photography';
      $pageTitle = 'Welcome';
      // HEADER
      include('inc/header.php');
    ?>


    <!-- SLIDESHOW -->
    <div id="slideshow-container" class="slideshow-container">

      <!--  IMAGES  -->
      <img class="image-slides" src="img/sample1.jpeg" alt="" />
      <img class="image-slides" src="img/sample2.jpeg" alt="" />
      <img class="image-slides" src="img/sample3.jpeg" alt="" />
      <!--  /IMAGES  -->

      <img id ="left-arrow" class="arrow" src="img/leftArrow.svg" alt="left arrow" />
      <img id ="right-arrow" class="arrow" src="img/rightArrow.svg" alt="right arrow" />

      <div class="page-title-container">
        <h1 class="page-title">
          <!-- $pagetitle from 'pageTitle.php' -->
          <?php echo $pageTitle;?>
        </h1>
        <div class="title-line"></div>
      </div>

      <!--  CIRCLES (revise # of 'circle' <span> elements
      to match the # of 'slide-images' above)  -->
      <div class="slideshow-circles">
        <span class="circle dot" id="firstCircle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
      </div>
      <!--  /CIRCLES  -->
    </div>

    <!-- / SLIDESHOW -->


    <!-- FOOTER -->
    <?php include('inc/footer.php');?>


    <script src="../script/indexApp.js"></script>
  </body>

</html>
