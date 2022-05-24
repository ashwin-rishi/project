<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.0/datatables.min.css"/>
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="assets/logo1.png" width="120" height="100" alt="">
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/project/registeredUsersList.php">Registered Users <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/project/donatedUsersList.php">Donating Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/project/index.html">logout</a>
          </li>
        </ul>
      </div>
    </nav>
    <section class="pt-5">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header" style="color:white;background-color:lightblue">
                   <h4>Register</h4>
                </div>
                <div class="card-body">
                <table class="table" id="registeredUser" >
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Second Name</th>
                      <th scope="col">Parent Name</th>
                      <th scope="col">age</th>
                      <th scope="col">reason</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Address</th>
                      <th scope="col">Postal Code</th>
                      <th scope="col">Terms & Condition </th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    require 'config.php';
                    $rows = mysqli_query($conn, "SELECT * FROM registeredusers");
                    $i = 1;
                    ?>
                    <?php foreach($rows as $row) : ?>
                    <tr id = <?php echo $row["id"]; ?>>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $row["firstName"]; ?></td>
                      <td><?php echo $row["secondName"]; ?></td>
                      <td><?php echo $row["parentName"]; ?></td>
                      <td><?php echo $row["age"]; ?></td>
                      <td><?php echo $row["reason"]; ?></td>
                      <td><?php echo $row["phoneNumber"]; ?></td>
                      <td><?php echo $row["address"]; ?></td>
                      <td><?php echo $row["postalCode"]; ?></td>
                      <td><?php 
                      if($row["termsCondition"] == 'true') {echo 'Checked';}
                      else{
                        echo 'Not Checked';
                      }  ?></td>
                      <td>
                      <a class="btn btn-primary"  href="regEdit.php?id=<?php echo $row['id']; ?>">Edit</a>
                      </td>
                      <td>                        
                      <button type="button" class="btn btn-Danger" onclick="deleteData('registerDelete',<?php echo $row['id']; ?>)" data-id="">Delete</button>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>

    
    <br>
    <?php require 'script.php'; ?>
  </body>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.0/datatables.min.js"></script>

  <script>
    $(document).ready(function () {
    $('#registeredUser').DataTable({
      "pageLength": 5
    });
});
  </script>

</html>
