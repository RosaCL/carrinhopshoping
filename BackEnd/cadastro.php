<?php
require_once 'config.php';

if (isset($_POST['add_product'])) {
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'uploded_img/' . $p_image;



    $stmt = $pdo->prepare("INSERT INTO products (name, price, image) VALUES (:name, :price, :image)");
    $stmt->bindParam(':name', $p_name);
    $stmt->bindParam(':price', $p_price);
    $stmt->bindParam(':image', $p_image);

    if ($stmt->execute()) {
        move_uploaded_file($p_image_tmp_name, $p_image_folder);
        $message[] = 'Produto adicionado com sucesso!';
    } else {
        $message[] = "Não foi possível adicionar o produto.";
    }
}
