<link rel="stylesheet" href="css/nav.css">

<nav id="navbar">
  <a class="logo-link" href="./">
    <img id="nav-logo">
  </a>
  <div id="nav-main-container">
    <ul id="nav-items-container">
      <!--
      <li class="nav-item">
        <a class="nav-link" href="./volunteer.php">Volunteer</a>
      </li>
-->
      <li class="nav-item" id="what-we-do">
        <a class="nav-link" onclick="toggleSubItems('what-we-do')">What we do</a>
        <div class="nav-sub-item-container">
          <div class="nav-sub-item">
            <a class="nav-link" href="./VRcycle.php">
              Indoor Cycling
            </a>
          </div>
          <div class="nav-sub-item">
            <a class="nav-link" href="./outdoor.php">
              Outdoor Cycling
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item" id="changing-lives">
        <a class="nav-link" onclick="toggleSubItems('changing-lives')">Changing lives</a>
        <div class="nav-sub-item-container">
          <div class="nav-sub-item">
            <a class="nav-link" href="./stories.php">
              Our Stories
            </a>
          </div>
          <div class="nav-sub-item">
            <a class="nav-link" href="./abi.php">
            Acquired Brain Injuries
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./login.php">Login</a>
      </li>

    </ul>
  </div>
  <button type="button" id="nav-donate">Donate</button>
  <a id="nav-mobile-hamburger" onclick="toggleMobileNavOptions()">
  </a>
</nav>
<div class="nav-space"></div>

<div id="nav-mobile-options-container">
  <a class="nav-mobile-option" href="./donate.php">
    Donate
  </a>
  <!--
  <a class="nav-mobile-option" href="./volunteer.php">
    Volunteer
  </a>  
  -->
  <a class="nav-mobile-option" onclick="toggleMobileSubItems('what-we-do-m')" id="what-we-do-m">
    What we do
  </a>
  <a class="nav-mobile-sub-option" href="./VRcycle.php">
    Indoor cycling
  </a>
  <a class="nav-mobile-sub-option" href="./outdoor.php">
    Outdoor cycling
  </a>
  <a class="nav-mobile-option" onclick="toggleMobileSubItems('changing-lives-m')" id="changing-lives-m">
    Changing lives
  </a>
  <a class="nav-mobile-sub-option" href="./stories.php">
    Our Stories
  </a>
  <a class="nav-mobile-sub-option" href="./abi.php">
    Acquired Brain Injuries
  </a>
  <a class="nav-mobile-option" href="./contact.php">
    Contact
  </a>
  <a class="nav-mobile-option" href="./login.php">
    Login
  </a>
</div>