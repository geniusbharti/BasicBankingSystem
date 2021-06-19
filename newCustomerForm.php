<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Customer</title>
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- FONT AWESOME LINK -->
  <link rel="stylesheet" href="fontawesome-free-5.15.1-web\css\all.min.css">
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- CSS STYLE SHEET -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/newCustomer.css">

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
      </ul>
    </nav>

  </header>

  <h1>Your Trust. Our Responsibility.</h1>
  <div class="form">
    <form action="newCustomer.php" method="post" autocomplete="off">
      <label for="name">Name</label>
      <input type="text" class="iField" name="cname" id="name" placeholder="Enter your name" required>
      <br>
      <label for="email">Email</label>
      <input type="email" class="iField" name="cemail" id="email" placeholder="Enter valid email" required>
      <br>
      <label for="state">State</label>
      <input type="text" class="iField" name="cstate" id="state" placeholder="Enter your state" required>
      <br>
      <label for="balance">Balance</label>
      <input type="number" class="iField" name="cbalance" id="balance" placeholder="Enter bank balance" required>
      <br>
      <button type="submit" class="fsubmit homebutton btn" onclick="confirmRegistrationMessage()">Submit</button>
    </form>
  </div>
  <script src="scripts/newCustomer.js"></script>
</body>

</html>