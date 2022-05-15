<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "head.php" ?>
  <link rel="stylesheet" href="./css/glide.css">
  <link rel="stylesheet" href="./css/home.css">
</head>


<body>

  <div class="main">
    <?php include "nav.php"; ?>
    <div id="parent-hero-container">
      <div id="first-hero-container">
        <div id="first-hero-heading-container">
          <div id="first-hero-heading">
            Fresh Tracks helps people with brain injuries get on the track outside...
          </div>
        </div>
        <img src="img/hero-image-1.jpg" id="first-hero-image">
        <div id="first-hero-overlay"></div>
      </div>
      <div id="second-hero-container">
        <div id="second-hero-heading-container">
          <div id="second-hero-heading">
            and inside
          </div>
          <div id="hero-donate-button-container">
            <a id="hero-donate-button" href="#donate">
              Donate now
            </a>
          </div>
        </div>
        <img id="second-hero-image">
        <div id="second-hero-overlay"></div>
      </div>
    </div>

    <!-- Text bottom top of bottom page -->
    <div class="section-container" id="how-we-help">
      <div class="section">
        <div class="section-subheading">HOW WE HELP</div>
        <img class="section-icon" src="img/brain.png">
        <div class="section-text">
          Fresh Tracks provides supervised outdoor cycling using recumbent bikes and a home-based system called the
          VRcycle that combines a modified recumbent exercise cycle, computer tablet and specifically designed APP.
          Riders
          use the VRcycle to physically peddle and steer to move an Avatar through a range of challenges.
          Both services provide physical and mental stimulation and through regular use work to develop new neural
          connections helping in the persons rehabilitation.

        </div>
      </div>
    </div>

    <div class="section-container" id="our-vision">
      <div class="section-background-overlay"></div>
      <div class="section">
        <img class="arrow-leftofscreen">
        <div class="section-subheading">Our Vision</div>
        <div class="section-text">
          To provide activity-based services that stimulate the brain, improve strength and build social connections in
          young people who have suffered an acquired brain injury.

        </div>
      </div>
    </div>

    <div class="section-container" id="why-we-started">
      <div class="section">
        <img class="arrow-rightofscreen">
        <div class="section-subheading">why we started</div>
        <img class="section-image shadow" src="img/sam.jpg">
        </img>
        <div class="section-text">
          Fresh Tracks Foundation was started by the friends and family of Sam Carson, aged 26 who suffered an
          acquired
          brain injury (ABI) in October 2009.
          <br>
          <br>
          When Sam left Rehab his family and extended network had huge difficulties finding support to continue his
          recovery. It was for this reason that they came together to form the Freshtracks Foundation to assist Sam
          and
          other young Australians work to recover from an acquired brain injury.
          <br>
          <br>

          Throughout the last 13 years we have partnered with some wonderful organisations and worked with amazing
          and
          brave
          individuals. Throughout this journey we have found our services which both stimulate the brain directly
          and
          indirectly through exercise of the body have produced the greatest benefits. Our programs now focus on supervised outdoor and home-based recumbent cycling.

        </div>

      </div>

    </div>

    <div class="section-container">
    <div class="section-subheading" style="margin-bottom:32px;">Our sponsors</div>
      <div class="section glide-parent">
        <div class="glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide"><div class="glide-title">Norths Rugby</div><img width="80%" class="glide-image" src="./img/sponsors/norths-rugby.png"/> </li>
              <li class="glide__slide"><div class="glide-title">Souths Rugby</div><img width="80%" class="glide-image" src="./img/sponsors/norths-rugby.png"/> </li>
              <li class="glide__slide"><div class="glide-title">Easts Rugby</div><img width="80%" class="glide-image" src="./img/sponsors/norths-rugby.png"/> </li>
              <li class="glide__slide"><div class="glide-title">Wests Rugby</div><img width="80%" class="glide-image" src="./img/sponsors/norths-rugby.png"/> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="./js/glide.js"></script>


    <?php include 'footer.php'; ?>

  </div>

</body>

</html>