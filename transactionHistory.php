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
        <a href="transactionHistory.php"><li>Transactions</li></a>
      </ul>
    </nav>

  </header>
  <h2 style="text-align:center; margin: 5px;">Transaction History</h2>
  <table style="width: 80%; margin: 10px auto 20px; cursor:pointer;" class="table table-hover table-bordered">
    <tr>
      <thead class="thead-dark table-info">
        <th>S.No.</th>
        <th>Amount Transfered</th>
        <th>From</th>
        <th>To</th>
        <th>Date and Time</th>
      </thead>
    </tr>
    
    <?php
    include "connection.php";
    $sql = "SELECT Id, AmountTransfered, Sender, Receiver, DateTime FROM transactions";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["AmountTransfered"] . "</td><td>" . $row["Sender"] . "</td><td>" . $row["Receiver"] . "</td><td>" . $row["DateTime"] . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 Transactions";
    }

    $conn->close();

    ?>
  </table>


</body>

</html>