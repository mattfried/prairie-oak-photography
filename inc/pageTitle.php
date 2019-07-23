<?php if ($portfolio === true) {
  // for portfolio pages
  echo '<div class="title-img-container-port">';
} else {
  // for all other pages, excluding index.php
  echo '<div class="title-img-container">';
} ?>

  <!-- set title img for all pages, excluding index -->
  <!-- portfolio pages populate this element via JavaScript -->
  <img class="title-img" id="title-img" src="../img/<?php echo $titleImg;?>" alt="" />
  <div class="page-title-container">
    <h1 class="page-title" id ="page-title">
      <?php echo $pageTitle;?>
    </h1>
    <div class="title-line" id = "page-title-line"></div>
  </div>
  
  <!-- provide slideshow arrows for portfolio pages -->
  <?php if ($arrows) {
    echo
      '<img id ="left-arrow-portfolio" class="arrow" src="img/leftArrow.svg" alt="left arrow" />
      <img id ="right-arrow-portfolio" class="arrow" src="img/rightArrow.svg" alt="right arrow" />';
  } ?>
</div>
