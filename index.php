<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

  <title>Banking System</title>
</head>

<body>

  <?php
  require_once 'config.php';
  include 'navbar.php';
  ?>
  <div class="container-fluid">
    <div class="row intro py-1">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h1>Banking System</h1>
          <br>
          <h2 class="action"><span style="font-family: 'Roboto Slab', serif">CHOOSE AN ACTION</h2></span>
          <div class="column activity text-center">
            <br>
            <div class="col-md act">
              <a href="transfermoney.php"><button>
                  <h3>View Customers to transfer<h3>
                </button></a>
            </div>
            <br>
            <div class="col-md act">
              <a href="transactionhistory.php"><button>
                  <h3>Transfer History<h3>
                </button></a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md img text-center">
        <img class="im" src="img/bank.jpg">
      </div>
    </div>


    <br>



  </div>

  <footer class="text-center py-2">
    <p>Unique Patel <br>@ The Sparks Foundation</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>