<link rel="stylesheet" href="css/nav.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="logo-link" href="./">
    <img class="logo" src="Images/logo.svg">
  </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./volunteer.php">Volunteer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Stories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./abi.php">Acquired Brain Injuries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>

      <!-- search bar -->
      <nav class="searchbar navbar-light bg-light">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>
      </nav>
      <!--  -->
    </ul>
  </div>
  <button type="button" class="donateNav btn-outline-primary">Donate</button>
  <a id="nav-mobile-hamburger" onclick="toggleMobileNavOptions()">
  </a>
</nav>
<div class="nav-space"></div>

<div id="nav-mobile-options-container">
  <a class="nav-mobile-option" href="./volunteer.php">
    Volunteer
  </a>
  <a class="nav-mobile-option">
    Services
  </a>
  <a class="nav-mobile-option">
    Stories
  </a>
  <a class="nav-mobile-option" href="./abi.php">
    Acquired Brain Injuries
  </a>
  <a class="nav-mobile-option">
    Contact
  </a>
  <a class="nav-mobile-option" href="login.php">
    Login
  </a>
  <a class="nav-mobile-option">
    Donate
  </a>
</div>