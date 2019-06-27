<?php if ($portfolio === true) {
  echo '<div class="title-img-container-port">';
} else {
  echo '<div class="title-img-container">';
} ?>

  <img class="title-img" id="title-img" src="../img/<?php echo $titleImg;?>" alt="" />
  <div class="page-title-container">
    <h1 class="page-title" id ="page-title">
      <?php echo $pageTitle;?>
    </h1>
    <div class="title-line" id = "page-title-line"></div>
  </div>
  <?php if ($arrows) {
    echo
      '<img id ="left-arrow-portfolio" class="arrow" src="img/leftArrow.svg" alt="left arrow" />
      <img id ="right-arrow-portfolio" class="arrow" src="img/rightArrow.svg" alt="right arrow" />';
  } ?>
</div>
