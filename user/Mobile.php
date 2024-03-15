<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-page</title>
  <?php
  include 'header.php';
  ?>
</head>

<body>
  <div class="container-fluid">
    <div class="colmd-12">
      <div class="row">



        <h1 class="text-warning font-monospace  text-center my-3">MOBILES </h1>
        <?php
        include 'Config.php';
        $Record = mysqli_query($con, "SELECT * FROM tblproduct");
        while ($row = mysqli_fetch_array($Record)) {
          $check_page = $row['PCategory'];
          if ($check_page === 'Mobile') {



            echo "
  <div class='col-md-6 col-lg-4 m-auto mb-3'>
  <form action = 'Insertcart.php' method = 'POST'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[PImage]'' class='card-img-top'>
  <div class='card-body text-center '>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
    <p class='card-text text-danger fs-4 fw-bold'>";?>RS: <?php echo number_format($row['PPrice'],2) ?>  <?php echo "</p>
    <input type = 'hidden' name = 'PName' value = '$row[PName]'>
    <input type = 'hidden' name = 'PPrice' value = '$row[PPrice]'>
    <input type='number' name = 'PQuantity' value =' mn= '1' max = '10'' placeholder = 'Quantity'><br><br>
    <input type='submit' name = 'addCart' class = 'btn btn-warning text-white w-100' value ='Add To Cart'>

  </div>
</div>
</form>
</div>
";
          }
        }
        ?>
      </div>
    </div>
  </div>
  <?php
include 'footer.php';
?>
</body>

</html>