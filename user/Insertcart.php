

<?php
session_start();
    // Check if form fields are set, set default values if not
    $product_name = $_POST['PName'] ?? '';
    $product_price = $_POST['PPrice'] ?? '';
    $product_quantity = $_POST['PQuantity'] ?? '';

    if (isset($_POST['addCart'])) {
        // Check if the product already exists in the cart
        $check_product = array_column($_SESSION['cart'] ?? [], 'productName');
        if (in_array($product_name, $check_product)) {
            echo "
        <script>
        alert('Product already added');
        </script>
        ";
        } else {
            // Add product to the cart
            $_SESSION['cart'][] = array(
                'productName' => $product_name,
                'product_price' => $product_price,
                'product_Quantity' => $product_quantity
            );
            header("location:viewCart.php");
        }
    }

    if (isset($_POST['remove'])) {
        // Remove product from cart
        $item_to_remove = $_POST['item'] ?? '';
        if (!empty($item_to_remove)) {
            foreach ($_SESSION['cart'] ?? [] as $key => $value) {
                if ($value['productName'] === $item_to_remove) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    header("location:viewCart.php");
                    break;
                }
            }
        }
    }

    if (isset($_POST['update'])) {
        $item_to_update = $_POST['item'] ?? '';
        if (!empty($item_to_update)) {
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['productName'] === $item_to_update) {
                    // Update the quantity and price
                    $_SESSION['cart'][$key]['product_price'] = $product_price;
                    $_SESSION['cart'][$key]['product_Quantity'] = $product_quantity;
                    // Redirect back to the cart page
                    header("location:viewCart.php");
                    exit(); // Terminate script execution after redirection
                    break;
                }
            }
        }
    }
?>