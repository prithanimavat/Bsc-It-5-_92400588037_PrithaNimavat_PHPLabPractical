<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

$laptops = [
    "Lenovo" => [
        [
            "model" => "Ideapad",
            "price" => 27990
        ],
        [
            "model" => "Legion",
            "price" => 150000
        ]
    ],

    "HP" => [
        [
            "model" => "Pavilion 14",
            "price" => 60000
        ],
        [
            "model" => "Spectre x360",
            "price" => 135000
        ]
    ]
];

echo "\n Multidimensional Array (Laptops) \n";
print_r($laptops);

?>

        
</body>
</html>