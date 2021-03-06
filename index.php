    <?php
      // PHP variables for PHP include files
      $title = 'Prairie Oak Photography';
      $pageTitle = 'Welcome';
      $portfolio = false;

      // HEADER
      include('inc/header.php');
    ?>


    <!-- SLIDESHOW -->
    <div id="slideshow-container" class="slideshow-container">

      <!--  IMAGES  -->
      <img class="image-slides" src="img/wedding/wed-01.jpg" alt="newlyweds holding hands infront of wedding doors" />
      <img class="image-slides" src="img/maternity/mat-02.jpg" alt="husband holding pregnant wife's belly in woods" />
      <img class="image-slides" src="img/newborn/newborn-06.jpg" alt="husband and wife kissing sleeping babys head" />
      <img class="image-slides" src="img/engagement/eng-05.jpg" alt="engagement ring hanging on pine cones laying on snowy ground" />
      <img class="image-slides" src="img/wedding/wed-02.jpg" alt="couple holding eachother in the middle of long outdoor wood staircase" />
      <img class="image-slides" src="img/wedding/wed-04.jpg" alt="newlyweds holding eachother close with eyes closed" />
      <img class="image-slides" src="img/graduation/grad-07.jpg" alt="close up face shot of dressed up girl" />
      <img class="image-slides" src="img/family/fam-13.jpg" alt="family sitting by a fire in distant campground" />
      <!--  /IMAGES  -->

      <img id ="left-arrow" class="arrow" src="img/leftArrowShape.svg" alt="left arrow" />
      <img id ="right-arrow" class="arrow" src="img/rightArrowShape.svg" alt="right arrow" />

      <div class="page-title-container">
        <h1 class="page-title">
          <!-- $pagetitle from 'pageTitle.php' -->
          <?php echo $pageTitle;?>
        </h1>
        <div class="title-line"></div>
      </div>

      <!--  CIRCLES -->
      <!--(revise # of 'circle' <span> elements
      to match the # of 'slide-images' above)  -->
      <div class="slideshow-circles">
        <span class="circle dot" id="firstCircle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
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
