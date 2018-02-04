<?php
session_start();
$logged_in = false;
  if (empty($_SESSION['Id_admin'])) {
      echo "<script type='text/javascript'>document.location='login';</script>";
  }
  else {
      $logged_in = true;
  }

?>
  <header>
    <h1 class="hide"><?php echo $Page ?> | Ceku Admin</h1>
    <ul class="own-sidenav light-blue darken-1">
      <li class="own-sidenav-links">
        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <a href="index.php" class="collapsible-header waves-effect waves-light">
              <i class="material-icons">mail</i>
              <span class="hidden-own-sidenav-mini">Invitation</span>
            </a>
          </li>
          <li>
            <a href="office.php" class="collapsible-header waves-effect waves-light">
              <i class="material-icons">account_balance</i>
              <span class="hidden-own-sidenav-mini">Office</span>
            </a>
          </li>
          <li>
            <a href="system/logout.php" class="collapsible-header waves-effect waves-light">
              <i class="material-icons">arrow_back</i>
              <span class="hidden-own-sidenav-mini">Logout</span>
            </a>
          </li>
          <li class="clearfix"></li>
        </ul>
      </li>
    </ul>
  </header>
