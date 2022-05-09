<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "head.php"; ?>
  <link rel="stylesheet" href="./css/contact.css">
</head>


</body>

<div class="main">

  <?php include "nav.php"; ?>


  <div class="parent-topbar-container" id="contact-topbar-parent">
    <div class="topbar-overlay"></div>
    <div class="topbar-container">
      Get in touch with us
    </div>
  </div>
  <div id="contact-parent">
    <div id="contact-left">
      <div id="contact-form-container">
        <div class="contact-header">
          Send us a message
        </div>
        <form action="" id="contact-form">
          <div id="contact-name-label" class="contact-label">
            Name
          </div>
          <input type="text" id="contact-name" class="contact-input">
          <div id="contact-state-label" class="contact-label">
            State
          </div>
          <input type="text" id="contact-state" class="contact-input">
          <div id="contact-email-label" class="contact-label">Email</div>
          <input type="text" id="contact-email" class="contact-input">
          <div id="contact-query-label" class="contact-label">Comment</div>
          <input type="text" id="comment-input">
          <div id="contact-submit-button">Submit</div>
        </form>
      </div>
    </div>
    <div id="contact-right">
      <div id="reach-out-container">
        <div class="contact-header">
          Or reach out
        </div>
        <div class="contact-sub-header">ABN</div>
        <div class="contact-text">49 197 492 992</div>
        <div class="contact-sub-header">Postal Address</div>
        <div class="contact-text">PO Box 170 St Ives NSW 2075</div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>
</body>

</html>