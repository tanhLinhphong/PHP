<?php
// Mảng chứa thông tin sản phẩm
$products = array(
    array("id" => 1, "name" => "Áo Polo", "price" => 25),
    array("id" => 2, "name" => "Quần Jeans", "price" => 50),
    array("id" => 3, "name" => "Giày Sneakers", "price"=> 40)
);

// Kiểm tra giỏ hàng chưa được tạo, thì tạo mới
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Hàm thêm sản phẩm vào giỏ hàng
function addToCart($productId)
{
    global $products;

    foreach ($products as $product) {
        if ($product['id'] == $productId) {
            $_SESSION['cart'][] = $product;
            echo "đã thêm ". $product['name'] ." vào giỏ hàng.";
            return;
        }
    }

    echo "sản phẩm không tồn tại!";
}

// Hàm hiển thị giỏ hàng
function viewCart()
{
    if (empty($_SESSION['cart'])) {
        echo 'Giỏ hàng trống.';
        return;
    } else {
        echo "<h2>Danh sách các bạn:</h2>";
        $totalPrice = 0;

        foreach ($_SESSION['cart'] as $item) {
            echo $item['name'] . "-$" . $item['price'] . "<br>";
            $totalPrice += $item['price'];
        }

        echo "<strong>Tổng tiền:$ </strong>" . $totalPrice;
    }
}
addToCart(1);
addToCart(2);
viewCart();
?>