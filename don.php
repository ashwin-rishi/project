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
      <div class="form">
        <div class="input_field">
          <label>Donor Name</label>
          <input type="text" class="input" id="donarName">
        </div>
        <div class="input_field">
          <label>Gender</label>
          <div class="custom_select">
            <select id="gender">
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
        </div>
        <div class="input_field">
          <label>Designation</label>
          <input type="text" class="input" id="designation">
        </div>
        <div class="input_field">
          <label>Contact Number</label>
          <input type="number" class="input" id="contactNumber">
        </div>
        <span id="err3"></span>
        <div class="input_field">
          <label>Mail Id</label>
          <input type="email" class="input" id="email">
        </div>
        <div class="input_field terms">
          <label class="check">
            <input type="checkbox" id="termsCondition">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and condition</p>
        </div>
        <div class="input_field">
          <button class="btn" type="button" onclick="submitData('donate');">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <?php require 'script.php'; ?>
</body>

</html>