<?php

$amt = $_POST['amt'];
$from = $_POST['from'];
$to = $_POST['to'];

// connecting to database
$conn = mysqli_connect("localhost", "root", "", "bank") or die("Cannot connect");

//insert in transaction table
$sql = "INSERT INTO `transactions`(`AmountTransfered`, `Sender`, `Receiver`) VALUES ($amt,'$from','$to') ";
$query = mysqli_query($conn, $sql);


// turn off auto-commit
mysqli_autocommit($conn, FALSE);

// if transfer happened
if (isset($_POST['submit'])) {
  // add to receiver balance
  $result = mysqli_query($conn, "UPDATE customers SET Balance = Balance+$amt WHERE Name =  '$to' ");
  if ($result !== TRUE) {
    mysqli_rollback($conn);  // if error, roll back transaction

  }

  // subtract from sender balance
  $result = mysqli_query($conn, "UPDATE customers SET Balance = Balance-$amt WHERE Name =  '$from' ");
  if ($result !== TRUE) {
    mysqli_rollback($conn);  // if error, roll back transaction
  }
  // assuming no errors, commit transaction
  mysqli_commit($conn);
}

// close connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaction status page</title>
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- CSS STYLE SHEET -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body style="text-align:center; padding:10px; margin:10px;">
  <h1>
    <p>TRANSACTION SUCESSFUL!</p>
  </h1>
  <img style="width:600px; height: 450px; display:block; margin: 5px auto;" src="images/transferSuccess.jpg" alt="transferSuccessImg">
  <a href="transactionHistory.php"><button class="btn homebutton">View Transaction</button></a>

</body>

</html>