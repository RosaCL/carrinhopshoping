<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costureza (Administrador)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./ressources/css/style.css">
</head>
<body>
    <?php include 'includes/header.php';?>
    <div class="container">
        <section>
            <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
                <h3>Adicione um novo produto</h3>
                <input type="text" name="p_name" id="" placeholder="Nome do produto" required class="box">
                <input type="number" name="p_price" min="0" placeholder="Preço do produto" required class="box">
                <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg"  required class="box" >
                <input type="submit" name="add_product" value="Adicionar produto" class="btn">
            </form>
        </section>
    </div>
    <script src="./ressources/js/script.js"></script>
</body>
</html>