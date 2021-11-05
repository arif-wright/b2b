<!DOCTYPE html>
<html>
<title>Business to Business Solutions</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<style>
h1{font-size:42px;font-family:"rubikbold"}h2{font-size:24px;font-family:"rubik"}h3{font-size:24px;font-family:"barlow_condensedmedium_italic"}h4{font-size:20px}h5{font-size:18px}h6{font-size:16px}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body class="w3-sand">
<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <p class="w3-bar-item w3-green" style="margin-top:0px;height:80px;vertical-align:middle;"><a href="javascript:void(0)" onclick="w3_close()" class="w3-right"><i class="fas fa-times-circle"></i></a></p>
  <a href="profile.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-user-circle w3-text-green"></i> <?php echo $_SESSION["userid"]; ?></a>
  <a href="portal.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-home w3-text-green"></i> Home</a>
  <a href="request-list.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-clipboard-list w3-text-green"></i> Request List</a>
  <a href="includes/logout.inc.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-sign-out-alt w3-text-green"></i> Logout</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left w3-link" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16" style="margin-right:16px;">
       
    </div>
    <div class="w3-center w3-padding-16">
    <img src="images/<?php if($_SESSION['privilege'] == "user"){echo 'cor.png';}if($_SESSION['privilege'] == "admin"){echo 'risen_two.png';}if($_SESSION['privilege'] == "superuser"){echo 'superuser.png';} ?>" />
    </div>
  </div>
  <div class="<?php if($_SESSION['privilege'] == "user"){echo 'w3-red';}if($_SESSION['privilege'] == "admin"){echo 'w3-blue';}if($_SESSION['privilege'] == "superuser"){echo 'w3-green';} ?>" style="max-width:1200px;margin:auto;height:25px;">
  </div>
</div>