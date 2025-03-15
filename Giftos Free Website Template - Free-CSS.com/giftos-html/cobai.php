<?php
$shop_section = [
    "item1" => [
        "item_Name" => "Gumsheild",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
        "item_image" => "img/",
    ],
    "item2" => [
        "item_Name" => "Gumsheild",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
        "item_image" => "img/",
    ],
    "item3" => [
        "item_Name" => "Gumsheild",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
        "item_image" => "img/",
    ],
    "item4" => [
        "item_Name" => "Gumsheild",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
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

    [
        "item_Name" => "Gumsheild",
        "item_desc" => "lorem ipsum",
        "item_price" => "500000",
        "item_image" => "img/",
    ],
    [
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

<body>
    <?php
    foreach ($shop_section as $item) {
        echo "<h1>" . $item["item_Name"] . "</h1>";
        echo "<p>" . $item["item_desc"] . "</p>";
        echo "<p>" . $item["item_price"] . "</p>";
        echo "<img src='" . $item["item_image"] . "' alt=''>";
    }
    ?>
</body>

</html>