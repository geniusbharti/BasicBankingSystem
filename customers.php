<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- FONT AWESOME LINK -->
  <link rel="stylesheet" href="fontawesome-free-5.15.1-web\css\all.min.css">
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- CSS STYLE SHEET -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <header>

    <img src="images/logo_small.png" class="logo" alt="logo">

    <nav class="navbar">
      <ul>
        <a class="home" href="index.php"><li>Home</li></a>
        <a href="customers.php"><li>Customers</li></a>
        <a href="moneyTransfer.php"><li>Transfer Money</li></a>
        <a href="transactionHistory.php"><li>Transactions</li></a>
        <a href="newCustomerForm.php"><li>Create Account</li></a>
      </ul>
    </nav>

  </header>
  <h2 style="text-align:center; margin: 5px;">Our Customers</h2>
  <table style="width: 80%; margin: 10px auto 20px; cursor:pointer;" class="table table-hover table-bordered">
    <tr>
      <thead class="thead-dark table-info">
        <th>S.No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>State</th>
        <th>Balance</th>
      </thead>
    </tr>

    <?php
    include "connection.php";
    $sql = "SELECT SNo, Name, Email, State, Balance FROM customers";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["SNo"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["State"] . "</td><td>" . $row["Balance"] . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }

    $conn->close();

    ?>
    
  </table>
</body>

</html>