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
      <li class="nav-item" id="cycling">
        <a class="nav-link" onclick="toggleSubItems('cycling')">Cycling</a>
        <div class="nav-sub-item-container">
          <div class="nav-sub-item">
            <a class="nav-link" href="./indoor.php">
              Indoor
            </a>
          </div>
          <div class="nav-sub-item">
            <a class="nav-link" href="./outdoor.php">
              Outdoor
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./stories.php">Stories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./abi.php">Acquired Brain Injuries</a>
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
  <a class="nav-mobile-option">
    Donate
  </a>
  <!--
  <a class="nav-mobile-option" href="./volunteer.php">
    Volunteer
  </a>  
  -->
  <a class="nav-mobile-option" onclick="toggleMobileSubItems('mobile-cycling')" id="mobile-cycling">
    Cycling
  </a>
  <a class="nav-mobile-sub-option" href="./indoor.php">
    Indoor
  </a>
  <a class="nav-mobile-sub-option" href="./outdoor.php">
    Outdoor
  </a>
  <a class="nav-mobile-option" href="./stories.php">
    Stories
  </a>
  <a class="nav-mobile-option" href="./abi.php">
    Acquired Brain Injuries
  </a>
  <a class="nav-mobile-option" href="./contact.php">
    Contact
  </a>
  <a class="nav-mobile-option" href="./login.php">
    Login
  </a>
</div>