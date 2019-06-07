<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="../css/normalize.css" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300" rel="stylesheet" />
    <link rel="stylesheet" href="../css/application.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/pop-apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-pop-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-pop-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
  </head>

  <body>
    <div class="main-container" id="top"> <!-- MAIN CONTAINER -->

      <header class="main-header"> <!-- HEADER -->

        <a href="/" class="main-logo">
          <img src="../img/prairieOakPhotographyLogo1.png" alt="Prairie Oak Photography" />
        </a>

        <nav class="main-navbar">  <!-- NAV -->
          <div class="horiz-line"></div>
          <a href="../about.php" id="about-link">About</a>
          <div class="dropdown">
              <a id="portfolio-link" tabindex="0">Portfolio</a>
            <div class="dropdown-content">
              <a href="../engagement.php">Engagement</a>
              <a href="../wedding.php">Wedding</a>
              <a href="../maternity.php">Maternity</a>
              <a href="../baby.php">Baby</a>
              <a href="../family.php">Family</a>
            </div>
          </div>
          <a href="../pricing.php" id="pricing-link" class="visible">Pricing</a>
          <a href="../contact.php" id="contact-link" class="visible">Contact</a>
        </nav>  <!-- / NAV -->

      </header> <!-- / HEADER -->
