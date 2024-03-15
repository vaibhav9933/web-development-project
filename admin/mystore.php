<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin home-page</title>

  <!-- BootStrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<?php
session_start();
if (!$_SESSION['admin']) {
  header("location:form/login.php");
}
?>

<body>


  <nav class="navbar navbar-light bg-dark">
    <div class="container-fluid text-white">
      <a class="navbar-brand text-white">
        <h1>Mystore</h1>
      </a>
      <span>
        <i class="fas fa-user-shield"></i>Hello,<?php echo $_SESSION['admin'];?>
        <i class="fa-solid fa-right-from-bracket"></i>
        <a href="form/logout.php" class="text-decoration-none text-white">Logout</a>
        <a href="" class="text-decoration-none text-white">Userpanel</a>

      </span>
    </div>
  </nav>
  <div>
    <h2 class="text-center">Dashboard</h2>
  </div>

  <div class=" col-md-6 bg-danger text-center m-auto ">
    <a href="product/php" class="text white text-decoration-none fs-4 fw-bold px-5">Add Post</a>
    <a href="user.php" class="text white text-decoration-none fs-4 fw-bold px-5">Users</a>
  </div>



</body>

</html>