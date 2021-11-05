<?php
session_start();
?>

<?php require('includes/header.inc.php'); ?>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding w3-white" style="max-width:1200px;margin-top:100px">
    <div class="w3-row-padding w3-padding-16 w3-center table-concept">
        <h2>Request List</h2>
        <hr>
       <!-- <table style="width:100%">
            <thead>
                <tr class="<?php if($_SESSION['privilege'] == "user"){echo 'w3-red';}if($_SESSION['privilege'] == "admin"){echo 'w3-blue';}if($_SESSION['privilege'] == "superuser"){echo 'w3-green';} ?>">
                    <th><b>&nbsp;</b></th>
                    <th><b style="float:left">Requested On</b></th>
                    <th><b style="float:left">Customer Address</b></th>
                    <th><b style="float:left">Customer City</b></th>
                    <th><b style="float:left">Customer Zipcode</b></th>
                    <th><b style="float:left">Request Type</b></th>
                    <th><b style="float:left">Job Start</b></th>
                    <th><b style="float:left">Status</b></th>
                </tr>
            </thead>-->
            <?php 
                include "includes/requestlist.inc.php";
                echo $request->getRequest(); 
            ?>
       <!-- </table>-->

    </div>
<!-- End page content -->
    <hr>
    <hr>
    <?php require('includes/footer.inc.php'); ?>
  </div>
 
 