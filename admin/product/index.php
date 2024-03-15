<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product-page</title>
    <!-- BootStrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">

                <form action=" insert.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Detail:</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">product Name:</label>
                        <input type="text" name="PName" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">product Price:</label>
                        <input type="text" name="PPrice" class="form-control" placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add product Image:</label>
                        <input type="file" name="PImage" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">select page Category </label>
                        <select class="form-select" name="pages">
                            <option value="Home">Home</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Bag">Bag</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">upload</button>
                </form>
            </div>
        </div>
    </div>

    <!--fetch data -->

    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto ">

                <table class="table border border-warning table-hover border my-5 ">

                    <thead class="bg-dark text-white fs-5 font-monospace text-center">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </thead>

                    <tbody class="text-center">
                        <?php
                        include "Config.php";
                        $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");

                        while ($row = mysqli_fetch_array($Record))

                            echo "

        <tr>
            <td>$row[Id]</td>
            <td>$row[PName]</td>
            <td>$row[PPrice]</td>
            <td><img src='$row[PImage]'height='100px' width = '180px'></td>
            <td>$row[PCategory]</td>
            <td><a href='delete.php? ID=$row[Id]' class = 'btn btn-danger'>Delete</a></td>
            <td><a href='update.php? ID= $row[Id]' class = 'btn btn-warning'>Update</a></td>
        </tr>

         ";

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>