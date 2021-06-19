<?php

include "connection.php";

$name = $_POST['cname'];
$email = $_POST['cemail'];
$state = $_POST['cstate'];
$balance = $_POST['cbalance'];

$formData = $conn->prepare("insert into customers(Name,Email,State,Balance) values(?,?,?,?)");
$formData->bind_param("sssi", $name, $email, $state, $balance);
$formData->execute();
$formData->close();
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Registration</title>
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- CSS STYLE SHEET -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body style="text-align:center;">
  <header>

    <!-- NAVBAR -->
    <img src="images/logo_small.png" class="logo" alt="logo">

    <nav class="navbar">
      <ul>
        <a class="home" href="index.php"><li>Home</li></a>
        <a href="customers.php"><li>Customers</li></a>
        <a href="moneyTransfer.php"><li>Transfer Money</li></a>
        <a href="transactionHistory.php."><li>Transactions</li></a>
      </ul>
    </nav>

  </header>
  <h1 style="margin:40px 0px;">You are Successfully Registered as a Customer!</h1>
  <img style="width:600px; height:400px; border-radius: 30px;" src="images/plantImage.jpg" alt="plantimg">
  <a href="customers.php"><button class="homebutton btn">Click here to confirm your Registration</button></a>


</body>

</html>