<?php
session_start();
?>

<?php require('includes/header.inc.php'); ?>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding w3-white" style="max-width:1200px;margin-top:100px">
    <div class="w3-row-padding w3-padding-16 w3-center table-concept">
        <h2>Service Form</h2>
        <hr>
        <div style="border:1px solid rgba(0,0,0,0)">
            <div class="w3-left">
                <span class="profile_circle"><p><b><?php echo ''.substr($_GET["customerfirstname"], 0, 1).''.substr($_GET["customerlastname"], 0, 1).''; ?></b></p></span>
            </div>
            <div style="text-align:left">
                <h3>&nbsp;<?php echo ''.$_GET["customerfirstname"].' '.$_GET["customerlastname"].''; ?></h3>
            </div>
        </div>
        <div class="card" style="text-align:left;margin-top:16px;padding:0 0 16px 0;">
            <div class="<?php if($_SESSION['privilege'] == "user"){echo 'w3-red';}if($_SESSION['privilege'] == "admin"){echo 'w3-blue';}if($_SESSION['privilege'] == "superuser"){echo 'w3-green';} ?>"style="margin-left:0;margin-top:0;">
                <h4 style="margin-left:10px;padding-top:10px;padding-bottom:10px;">Personal Information</h4>
            </div>
            <div style="margin-left:10px;">
                <p>First Name: <?php echo $_GET["customerfirstname"]; ?> </p>
            </div>
            <div style="margin-left:10px;">
                <p>Last Name: <?php echo $_GET["customerlastname"]; ?></p>
            </div>
            <div style="margin-left:10px;">
                <p>Phone Number: <?php echo $_GET["customerphone"]; ?></p>
            </div>
            <div style="margin-left:10px;">
                <p>Address: <?php echo $_GET["customeraddress"]; ?> <?php echo $_GET["city"]; ?>, Texas <?php echo $_GET["zip"]; ?></p>
            </div>
        </div>
        <div class="card" style="text-align:left;margin-top:16px;padding:0 0 16px 0;">
            <div class="<?php if($_SESSION['privilege'] == "user"){echo 'w3-red';}if($_SESSION['privilege'] == "admin"){echo 'w3-blue';}if($_SESSION['privilege'] == "superuser"){echo 'w3-green';} ?>"style="margin-left:0;margin-top:0;">
                <h4 style="margin-left:10px;padding-top:10px;padding-bottom:10px;">Technical Information</h4>
            </div>
            <div style="margin-left:10px;">
                <p>Request Type: <?php echo $_GET["requesttype"]; ?></p>
            </div>
            <div style="margin-left:10px;">
                <p>Additional Information: <?php echo $_GET["info"]; ?></p>
            </div>
            <div style="margin-left:10px;">
                <p>Status:
                    <select name="result" id="pipe">
                        <?php if($requesttype !== "Repair"){echo '<option value="passed">Pass</option>';} ?>
                        <?php if($requesttype !== "Repair"){echo '<option value="failed">Fail</option>';} ?>
                        <option value="in progress">In-Progress</option>
                        <?php if($requesttype !== "Post-Hydrostatic" && $requesttype !== "Pre-Hydrostatic"){echo '<option value="completed">Completed</option>';} ?>
                        <option value="not available">Not Available</option>
                    </select>
                    <span class="error">* <?php echo $resultErr;?></span>
                </p>
            </div>
            <div style="margin-left:10px;">
                <p>Piping:
                    <select name="pipe" id="pipe">
                        <option value="PVC">PVC</option>
                        <option value="Copper">Copper</option>
                        <option value="Galvanized">Galvanized</option>
                        <option value="Pex">Pex</option>
                        <option value="CPVC">CPVC</option>
                        <option value="Kytec">Kytec</option>
                        <option value="ABS">ABS</option>
                        <option value="Cast Iron">Cast Iron</option>
                        <option value="Clay">Clay</option>
                        <option value="Concrete">Concrete</option>
                    </select>
                </p>
            </div>
        </div>
    </div>
<!-- End page content -->
    <hr>
    <hr>
    <?php require('includes/footer.inc.php'); ?>
</div>