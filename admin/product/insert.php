<?php


if (isset($_POST['submit'])) {
    include 'Config.php';

    $product_name = $_POST['PName'];
    $product_price = $_POST['PPrice'];
    $product_image = $_FILES['PImage'];
    print_r($product_image);
    $image_loc = $_FILES['PImage']['tmp_name'];
    $image_name = $_FILES['PImage']['name'];

    $img_des = "uploadimage/" . $image_name;
    move_uploaded_file($image_loc, "uploadimage/" . $image_name);


    $product_category = $_POST['pages'];

    // insert product

    mysqli_query($con, "INSERT INTO `tblproduct`(`PName`, `PPrice`, `PImage`, `PCategory`)
 VALUES ('$product_name','$product_price','$img_des','$product_category')");

 header("location:index.php");
}
?>




<!--fetch data -->





<table class="table table-striped table-hover">

<thead>
<th>Id</th>
<th>Name</th>
<th>Price</th>
<th>Image</th>
<th>PCategory</th>
<th>Update</th>
<th>Delete</th>

</thead>

</table>