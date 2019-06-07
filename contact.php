    <?php
      // PHP variables for PHP include files
      $title = 'Contact | Prairie Oak Photography';
      $pageTitle = 'Contact';
      $titleImg = 'titleImgExample1.jpg';
      //HEADER
      include('inc/header.php');
    ?>


    <!-- PAGE CONTAINER -->
    <div class="page-container">


      <!-- PAGE TITLE -->
      <?php include('inc/pageTitle.php');?>


      <!-- CONTACT SECTION -->
      <main class="contact-section">
        <h4>For general or booking inquiries please contact me:</h4>
        <div class="contact-links">
          <a href="mailto:prairieoakphotography@gmail.com">prairieoakphotography@gmail.com</a>
          <a href="tel:1-204-899-2285">1 (204) 899-2285</a>
          <span>Winnipeg, MB, CA</span>
        </div>

        <p>Thank You! I will respond to emails within 24-48 hours.</p>
      </main>





    </div>
    <!-- / PAGE CONTAINER -->


    <!-- FOOTER -->
    <?php include('inc/footer.php');?>


<!--    <script src="script/aboutApp.js"></script>-->
  </body>

</html>
