<?php
$shop_section = [
    "item1" => [
        "item_Name" => "Gumsheild",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
        "item_image" => "img/foto1.jpg",
    ],
    "item2" => [
        "item_Name" => "Hand Protector",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
        "item_image" => "img/",
    ],
    "item3" => [
        "item_Name" => "Shin protector",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
        "item_image" => "img/",
    ],
    "item4" => [
        "item_Name" => "Head protector",
        "item_desc" => "lorem ipsum",
        "item_price" => "900000",
        "item_image" => "img/",
    ],
    "item5" => [
        "item_Name" => "Gumsheild",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
        "item_image" => "img/",
    ],
    "item6" => [
        "item_Name" => "Gumsheild",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
        "item_image" => "img/",
    ],
    "item7" => [
        "item_Name" => "Gumsheild",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
        "item_image" => "img/",
    ],
    "item8" => [
        "item_Name" => "Gumsheild",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
        "item_image" => "img/",
    ]

]
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        /* 4 kolom */
        gap: 20px;
        /* Jarak antar item */
    }

    .grid-item {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }

    .grid-item img {
        max-width: 100%;
        height: auto;
    }
</style>

<body>
    <div class="grid-container">
        <?php
        foreach ($shop_section as $item) {
            echo "<div class='grid-item'>";
            echo "<img src='" . $item["item_image"] . "' alt=''>";
            echo "<h1>" . $item["item_Name"] . "</h1>";
            echo "<p>" . $item["item_desc"] . "</p>";
            echo "<p>" . $item["item_price"] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>