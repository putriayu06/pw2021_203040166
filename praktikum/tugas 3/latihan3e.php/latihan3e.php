<?php
/*
    Ayu Putri Dwi Annisa
    2030401666
    Jum'at, 13:00
*/
?>

<?php

$products = [

    [
        "picture" => "1.jpg",
        "name" => "Backpack Women",
        "brand" => "Zalora",
        "description" => "Women's backpack that is comfortable to use and has a large space and also has a beautiful color",
        "category" => "Backpack Bag",
        "price" => " 279k"
    ],
    [
        "picture" => "2.jpg", 
        "name" => "Clutch Bag",
        "brand" => "Zara",
        "description" => "Lightweight and simple bag with premium materials",
        "category" => "Clutch Bag",
        "price" => " 650k"
    ],
    [
        "picture" => "3.jpg",
        "name" => "Drawstring Bag",
        "brand" => "Zara",
        "description" => "Has a very light weight when it is empty, but can accommodate quite a lot of luggage which is quite a lot",
        "category" => "Drawstring Bag",
        "price" => " 200k"
    ],
    [
        "picture" => "4.jpg",
        "name" => "Halfmoon Bag",
        "brand" => "Zalora",
        "description" => "Zippered pastel leather sling bag Detachable and adjustable strap",
        "category" => "Halfmoon Bag",
        "price" => " 700k"
    ],
    [
        "picture" => "5.jpg",
        "name" => "Hand Bag",
        "brand" => "Coach",
        "description" => "A pebble textured handbag in a chic vintage feelin different colors Top cover with twist lock",
        "category" => "Hand Bag",
        "price" => " 500k"
    ],
    [
        "picture" => "6.jpg",
        "name" => "Mini Backpack ",
        "brand" => "Zara",
        "description" => "A cool bag for young people who want to hang out",
        "category" => "Mini Backpack",
        "price" => " 400k"
    ],
    [
        "picture" => "7.jpg",
        "name" => "Paper Bag",
        "brand" => "Lokal",
        "description" => "Paper bags of various colors that are made of thick material and can be used as gift bags",
        "category" => "Paper Bag",
        "price" => " 15k"
    ],
    [
       "picture" => "8.jpg",
        "name" => "Shoping Bag",
        "brand" => "Lokal",
        "description" => "Shoping bags are bags that are designed with fabrics", 
        "category" => "Shoping Bag",
        "price" => " 13k"
    ],
    [
        "picture" => "9.jpg",
        "name" => "Sling Bag",
        "brand" => "Consina",
        "description" => "High Quality Fabric, Black Size: 25 x 16 x 5 cm, simple bag, beautiful color, suitable for young people",
        "category" => "Sling Bag" ,
        "price" => " 250k"
    ],
    [
        "picture" => "10.jpg",
        "name" => "Tote Bag",
        "brand" => "Lokal",
        "description" => "A bag that is simple and suitable for college use", 
        "category" => "Tote Bag",
        "price" => " 35k"
    ]

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Bag</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- using fontawseome ----->
    <script src="https://kit.fontawesome.com/0fc708ed1b.js"
    crossorigin="anonymous"></script>

</head>
<body>

    <div class="container mt-5 mb-5">
        <table id="cari" class="table table-bordered">
            <thead>
                <tr class="tab">
                    <th>No</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                </tr>
            </thead>
            <?php $i = 1 ?>
            <?php foreach( $products as $p ) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><img src="img/<?= $p["picture"]; ?>"></td>
                    <td><?= $p["name"] ?></td>
                    <td><?= $p["brand"] ?></td>
                    <td><?= $p["description"] ?></td>
                    <td><?= $p["price"] ?></td>
                    <td><?= $p["category"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>