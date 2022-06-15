<link rel="stylesheet" href="css/nav.css">

<nav class="shadow">
  <div id="nav-parent-container">
    <a id="logo" href="./">
      <img id="logo-image" src="./img/small-logo.png">
    </a>
    <div id="nav-items-container">
      <a class="nav-item" id="what-we-do">What we do</a>
      <a class="nav-item" id="changing-lives">Changing lives</a>
      <a class="nav-item" href="./contact.php">Contact</a>
      <a class="nav-item" href="./login.php">Login</a>
    </div>
    <a id="donate-button" href="/">
      Donate
    </a>
    <img src="../img/hamburger2.svg" alt="menu" id="hamburger" onclick="toggleMobileNav()">
  </div>
  <div id="nav-liner"></div>
  <div class="nav-sub-item-parent" data-parent="what-we-do">
    <a class="nav-sub-item" href="./VRcycle.php">
      Indoor Cycling
    </a>
    <a class="nav-sub-item" href="./outdoor.php">
      Outdoor Cycling
    </a>
  </div>
  <div class="nav-sub-item-parent" data-parent="changing-lives">
    <a class="nav-sub-item" href="./stories.php">
      Our Stories
    </a>
    <a class="nav-sub-item" href="./abi.php">
      Acquired Brain Injuries
    </a>
  </div>
  <div id="mobile-nav-items-parent">
    <a href="" class="mobile-nav-item">Donate</a>
    <div onclick="toggleMobileSub('what-we-do')" id='mobile-what-we-do' class="mobile-nav-item">What we do</div>
    <a href="./VRcycle.php" class ="mobile-nav-item mobile-sub-item" data-parent="what-we-do">Indoor Cycling</a>
    <a href="./outdoor.php" class ="mobile-nav-item mobile-sub-item" data-parent="what-we-do">Outdoor Cycling</a>
    <div onclick="toggleMobileSub('changing-lives')" id="mobile-changing-lives" class="mobile-nav-item">Changing lives</div>
    <a href="./stories.php" class ="mobile-nav-item mobile-sub-item" data-parent="what-we-do">Our Stories</a>
    <a href="./abi.php" class ="mobile-nav-item mobile-sub-item" data-parent="what-we-do">Acquired Brain Injuries</a>
    <a href="./contact.php" class="mobile-nav-item">Contact</a>
    <a href="./login.php" class="mobile-nav-item">Login</a>
  </div>
</nav>
<div id="nav-bully"></div>

<script src="js/nav.js"> </script>
<!-- <a class="logo-link" href="./">
    <img id="nav-logo">
  </a>
  <div id="nav-main-container">
    <ul id="nav-items-container">
      <li 
        class="nav-item" 
        onmouseover="toggleSubItemsOn('what-we-do')" 
        onmouseleave="toggleSubItemsOff('what-we-do')" 
        id="what-we-do"
      >
        <a class="nav-link" >What we do</a>
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
      <li 
        class="nav-item" 
        onmouseover="toggleSubItemsOn('changing-lives')" 
        onmouseleave="toggleSubItemsOff('changing-lives')"   
        id="changing-lives"
      >
        <a class="nav-link">Changing lives</a>
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
  <a class="nav-mobile-option" href="./">
    Donate
  </a>
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
</div> -->