<html>

<head>
  <meta charaset="" UTF-8">
  <title>Donation Form</title>
  <link rel="stylesheet" href="css/don.css">
</head>

<body>
  <div class="wrapper">
    <div class="title">
      Donation Form
    </div>
    <form action="">
    <?php
        require 'config.php';
        $id = $_GET["id"];
        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM donatingusers WHERE id = $id"));
        ?>
      <div class="form">
      <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
        <div class="input_field">
          <label>Donor Name</label>
          <input type="text" class="input" id="donarName" value="<?php echo $rows['donarName']; ?>"> 
        </div>
        <div class="input_field">
          <label>Gender</label>
          <div class="custom_select">
            <select id="gender">
              <option value="" <?php if($rows["gender"] == '')echo 'Checked'; ?>>Select</option>
              <option value="male" <?php if($rows["gender"] == 'male')echo 'selected'; ?>>Male</option>
              <option value="female" <?php if($rows["gender"] == 'female')echo 'selected'; ?>>Female</option>
            </select>
          </div>
        </div>
        <div class="input_field">
          <label>Designation</label>
          <input type="text" class="input" id="designation" value="<?php echo $rows['designation']; ?>">
        </div>
        <div class="input_field">
          <label>Contact Number</label>
          <input type="number" class="input" id="contactNumber" value="<?php echo $rows['contactNumber']; ?>">
        </div>
        <span id="err3"></span>
        <div class="input_field">
          <label>Mail Id</label>
          <input type="email" class="input" id="email" value="<?php echo $rows['email']; ?>">
        </div>
        <div class="input_field">
          <label>Mail Id</label>
          <input type="email" class="input" id="email" value="<?php echo $rows['email']; ?>">
        </div>
        <div class="input_field">
          <label>Donation Type</label>
          &nbsp;&nbsp;&nbsp;
          <input type="radio" name="type" id="cash" value="cash"  <?php 
                      if($rows["type"] == 'cash') {echo 'checked';}
                        ?>><label>Cash</label> 
          <input type="radio" name="type" id="goods" value="goods"
          <?php 
                      if($rows["type"] == 'goods') {echo 'checked';}
                        ?>><label>Goods</label> 
        </div>
        <div class="input_field terms">
          <label class="check">
            <input type="checkbox" id="termsCondition"
            <?php 
                      if($rows["termsCondition"] == 'true') {echo 'Checked';}
                        ?>>
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and condition</p>
        </div>
        <div class="input_field">
          <button class="btn" type="button" onclick="submitData('donateEdit');">Submit</button>
        </div>
        <a href="/project/donatedUsersList.php"><button class="btn1">  Back </button></a>
      </div>
    </form>
  </div>
  <?php require 'script.php'; ?>
</body>

</html>