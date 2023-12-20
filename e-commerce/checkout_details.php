<html>
  <head>
    <title>E-commerece</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- <link rel="stylesheet" href="main.css" /> -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body class="landing is-preload">
    <div id="page-wrapper">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerece";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

  $sql = "SELECT * FROM checkout";
  $result = $conn->query($sql);

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    ?>
    <table border="1" class="table table-bordered">
      <tr>
        <th>S.no</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Country</th>
        <th>Address Line 1</th>
        <th>Address Line 2</th>
        <th>Post Code</th>
        <th>City</th>
        <th>Add. Info</th>
      </tr>
    <?php
    $i =1;
    while ($row = $result->fetch_assoc()) {
      ?>

      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $row["firstName"] ?></td>
        <td><?php echo $row["lastName"] ?></td>
        <td><?php echo $row["phone"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td><?php echo $row["country"] ?></td>
        <td><?php echo $row["addressLine1"] ?></td>
        <td><?php echo $row["addressLine2"] ?></td>
        <td><?php echo $row["postcode"] ?></td>
        <td><?php echo $row["city"] ?></td>
        <td><?php echo $row["additionalInfo"] ?></td>
      </tr>
      <?php
    }
    ?>
    </table>
<?php } else {
    echo "No records found";

}


?>
</div>
</body>
</html>