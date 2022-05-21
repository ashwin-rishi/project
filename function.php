<?php
require 'config.php';

if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "donate"){
    donateuser();
  }
  else if($_POST["action"] == "registerEdit"){
    editregister();
  }
  else if($_POST["action"] == "donateEdit"){
    editdonate();
  }
  else if($_POST["action"] == "registerDelete"){
    deleteregister();
  }
  else if($_POST["action"] == "donateDelete"){
    deletedonate();
  }
  else{
    error();
  }
}

function register(){
  global $conn;

  $firstName = $_POST["firstName"];
  $secondName = $_POST["secondName"];
  $parentName = $_POST["parentName"];
  $age = $_POST["age"];
  $reason = $_POST["reason"];
  $phoneNumber = $_POST["phoneNumber"];
  $address = $_POST["address"];
  $postalCode = $_POST["postalCode"];
  $termsCondition = $_POST["termsCondition"];

  $query = "INSERT INTO registeredusers VALUES('', '$firstName', '$secondName', '$parentName', '$age', '$reason', '$phoneNumber', '$address', '$postalCode', '$termsCondition')";
  mysqli_query($conn, $query);
  echo "Registered Successfully . Our team will Contact you!!";
}
function donateuser(){
  global $conn;

  $donarName = $_POST["donarName"];
  $gender = $_POST["gender"];
  $designation = $_POST["designation"];
  $contactNumber = $_POST["contactNumber"];
  $email = $_POST["email"];
  $termsCondition = $_POST["termsCondition"];


  $query = "INSERT INTO donatingusers VALUES('', '$donarName', '$gender', '$designation', '$contactNumber', '$email', '$termsCondition')";
  mysqli_query($conn, $query);
  echo "Registered Successfully . Our team will Contact you!!";
}

function editregister(){
  global $conn;

  $id = $_POST["id"];
  $firstName = $_POST["firstName"];
  $secondName = $_POST["secondName"];
  $parentName = $_POST["parentName"];
  $age = $_POST["age"];
  $reason = $_POST["reason"];
  $phoneNumber = $_POST["phoneNumber"];
  $address = $_POST["address"];
  $postalCode = $_POST["postalCode"];
  $termsCondition = $_POST["termsCondition"];

  $query = "UPDATE registeredusers SET firstName = '$firstName', secondName = '$secondName', parentName = '$parentName', age = '$age', reason = '$reason', phoneNumber = '$phoneNumber', address = '$address', postalCode = '$postalCode', termsCondition = '$termsCondition' WHERE id = $id";
  mysqli_query($conn, $query);
  echo "Updated Successfully";
}
function editdonate(){
  global $conn;

  $id = $_POST["id"];
  $donarName = $_POST["donarName"];
  $gender = $_POST["gender"];
  $designation = $_POST["designation"];
  $contactNumber = $_POST["contactNumber"];
  $email = $_POST["email"];
  $termsCondition = $_POST["termsCondition"];

  $query = "UPDATE donatingusers SET donarName = '$donarName', gender = '$gender', designation = '$designation', contactNumber = '$contactNumber', email = '$email', termsCondition = '$termsCondition' WHERE id = $id";
  mysqli_query($conn, $query);
  echo "Updated Successfully";
}

function deleteregister(){
  global $conn;

  $id = $_POST["id"];

  $query = "DELETE FROM registeredusers WHERE id = $id";
  mysqli_query($conn, $query);
  echo "Deleted Successfully";
}

function deletedonate(){
  global $conn;

  $id = $_POST["id"];

  $query = "DELETE FROM donatingusers WHERE id = $id";
  mysqli_query($conn, $query);
  echo "Deleted Successfully";
}
function error(){
  echo "Something Went Wrong";
}