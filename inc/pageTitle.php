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
      '<svg id ="left-arrow-portfolio" class="arrow" alt="left arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>
      <svg id ="right-arrow-portfolio" class="arrow" alt="right arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>';
  } ?>
</div>
