<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Registration Form</title>
    <link rel="stylesheet" href="css/reg.css">

</head>

<body>
    <div class="wrapper">
        <div class="title">
            Registration Edit Form
        </div>
        <form class="needs-validation" autocomplete="off" action="" method="post">
        <?php
            require 'config.php';
            $id = $_GET["id"];
            $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM registeredusers WHERE id = $id"));
            ?>
            <div class="form">
            <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
                <div class="input_field">
                    <label>Student First Name</label>
                    <input type="text" class="input" id="firstName" value="<?php echo $rows['firstName']; ?>">
                </div>
                <div class="input_field">
                    <label>Student Second Name</label>
                    <input type="text" class="input" id="secondName" value="<?php echo $rows['secondName']; ?>">
                </div>
                <div class="input_field">
                    <label>Parent/gaurdian Name</label>
                    <input type="text" class="input" id="parentName" value="<?php echo $rows['parentName']; ?>">
                </div>
                <div class="input_field">
                    <label>Age</label>
                    <input type="text" class="input" id="age" value="<?php echo $rows['age']; ?>">
                </div>
                <div class="input_field">
                    <label>Reason for choosing sevashramam</label>
                    <input type="text" class="input" id="reason" value="<?php echo $rows['reason']; ?>">
                </div>
                <div class="input_field">
                    <label>phone Number</label>
                    <input type="text" class="input" id="phoneNumber" value="<?php echo $rows['phoneNumber']; ?>"><br>
                </div>
                <span id="err3"></span>
                <div class="input_field">
                    <label>Address</label>
                    <textarea class="textarea" id="address"><?php echo $rows['address']; ?></textarea>
                </div>
                <div class="input_field">
                    <label>Postal code</label>
                    <input type="text" class="input" id="postalCode" value="<?php echo $rows['postalCode']; ?>">
                </div>
                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" id="termsCondition" <?php 
                      if($rows["termsCondition"] == 'true') {echo 'Checked';}
                        ?>>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agreed to follow the terms and conditions of Madurai Sevashramam</p>
                </div>
                <div class="input_field">
                    <button class="btn" type="button" onclick="submitData('registerEdit');">Submit</button>
                </div>
                <a href="/project/registeredUsersList.php">Back</a>
            </div>

        </form>

        <?php require 'script.php'; ?>
</body>

</html>