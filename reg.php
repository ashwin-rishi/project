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
            Registration Form
            <br>
            <strong style="font-size: 10px;">Note::</strong><span style="font-size: 10px;color:black" >Only Female students accepted</span>
          
        </div>
        
        <form class="needs-validation" autocomplete="off" action="" method="post">
            <div class="form">
                <div class="input_field">
                    <label>Student First Name</label>
                    <input type="text" class="input" id="firstName">
                </div>
                <span id="err1"></span>
                <div class="input_field">
                    <label>Student Second Name</label>
                    <input type="text" class="input" id="secondName">
                </div>
                <span id="err2"></span>
                <div class="input_field">
                    <label>Parent/gaurdian Name</label>
                    <input type="text" class="input" id="parentName">
                </div>
                <span id="err3"></span>
                <div class="input_field">
                    <label>Age</label>
                    <input type="number" class="input" id="age">
                </div>
                <span id="err4"></span>
                <div class="input_field">
                    <label>Reason for choosing sevashramam</label>
                    <input type="text" class="input" id="reason">
                </div>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="number" class="input" id="phoneNumber"><br>
                </div>
                <span id="err5"></span>
                <div class="input_field">
                    <label>Address</label>
                    <textarea class="textarea" id="address"></textarea>
                </div>
                <span id="err6"></span>
                <div class="input_field">
                    <label>Postal code</label>
                    <input type="number" class="input" id="postalCode">
                </div>
                <span id="err7"></span>
                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" id="termsCondition">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agreed to follow the terms and conditions of Madurai Sevashramam</p>
                </div>
                <span id="err8"></span>
                <div class="input_field">
                    <button class="btn" type="button" onclick="submitData('register');">Submit</button><br>
                </div>

                
                <a class="btn1" href="/project/index.html">  Back</a> 
                

            </div>

        </form>

        <?php require 'script.php'; ?>
</body>

</html>