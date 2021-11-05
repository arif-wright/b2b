<?php
session_start();
?>

<?php require('includes/header.inc.php'); ?>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding w3-white" style="max-width:1200px;margin-top:113px">
  <div class="w3-row-padding w3-padding-16 w3-center">
    <h2>Business To Business Solutions Portal</h2>
    <hr>
    <div class="w3-quarter w3-left">
        <p>Welcome back, <?php echo $_SESSION["userid"]; ?>!</p>
    </div>
    <div class="w3-quarter">
    </div>
    <div class="w3-quarter">
    </div>
    <div class="w3-quarter">
    </div>
  </div>
  <hr>
  <hr>
  <!-- End page content -->
  <?php require('includes/footer.inc.php'); ?>