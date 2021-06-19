 <!-- PHP SOURCE CODE -->
 <?php
  // connecting to database
  $conn = mysqli_connect("localhost", "root", "", "bank") or die("Cannot connect");

  // turn off auto-commit
  mysqli_autocommit($conn, FALSE);

  // get customer balances
  // save in array, use to generate form
  $result = mysqli_query($conn, "SELECT * FROM customers");
  while ($row = mysqli_fetch_assoc($result)) {
    $customers[] = $row;
  }
  // close connection
  mysqli_close($conn);

  ?>
 <!-- PHP SOURCE CODE END-->

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Money Transfer</title>
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

 <body style="text-align:center;">
   <!-- NAVBAR -->

   <header>

     <img src="images/logo_small.png" class="logo" alt="logo">

     <nav class="navbar">
       <ul>
         <a href="index.php" class="home"><li>Home</li></a>
         <a href="customers.php"><li>Customers</li></a>
         <a href="moneyTransfer.php"><li>Transfer Money</li></a>
         <a href="transactionHistory.php"><li>Transactions</li></a>
       </ul>
     </nav>

   </header>

   <!-- NAVBAR END -->

   <!-- FORM -->
   <form action="transfer.php" method="post" style="width:80%; margin: 40px auto;">
     <h2><label for="amount">Enter Amount:</label></h2>
     <h2><input id="amount" class="form-control form-control-lg" type="number" name="amt" required></h2>
     <h2><label for="From">From:</label></h2>
     <select id="From" name="from" class="form-select form-select-lg mb-3" style="cursor:pointer;" aria-label=".form-select-lg example" required>
       <?php
        foreach ($customers as $value) {
          echo "<option value=\"" . $value['Name'] . "\">" . $value['Name'] . "- Amount: " . $value['Balance'] . "</option>";
        }
        ?>
     </select>
     <h2><label for="To">To:</label></h2>
     <select id="To" name="to" class="form-select form-select-lg mb-3" style="cursor:pointer;" aria-label=".form-select-lg example" required>
       <?php
        foreach ($customers as $value) {
          echo "<option value=\"" . $value['Name'] . "\">" . $value['Name'] . "- Amount: " . $value['Balance'] . "</option>";
        }
        ?>
     </select>

     <button type="submit" class="btn homebutton" name="submit" onclick="transferMessage()">TRANSFER</button>
   </form>
   <!-- FORM -->


   <script src="scripts/moneyTransfer.js"></script>

 </body>

 </html>



 