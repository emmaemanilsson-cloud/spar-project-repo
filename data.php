<?php

// testarray with testImage

$images = [
    [
        'src' => "/assets/instagallery/SoME.jpg",
        'alt' => "productimage"
    ],
    [
        'src' => "/assets/testImages/insta.jpg",
        'alt' => "productimage"
    ],
    [
        'src' => "/assets/testImages/insta.jpg",
        'alt' => "productimage"
    ],
    [
        'src' => "/assets/testImages/insta.jpg",
        'alt' => "productimage"
    ],
    [
        'src' => "/assets/testImages/insta.jpg",
        'alt' => "productimage"
    ],
    [
        'src' => "/assets/testImages/insta.jpg",
        'alt' => "productimage"
    ],

];


// test-array with product images and product info for carousel

$products = [
    [
        'name' => "Retro Hiker Shoe",
        'image' => [
            'src' => "/assets/products/render_sko_en.jpg",
            'alt' => "Shoe"
        ],
        'price' => 3499,
    ],
    [
        'name' => "Retro Hiker Bag",
        'image' => [
            'src' => "/assets/products/väskarender.jpg",
            'alt' => "Shoe"
        ],
        'price' => 1999,
    ],
    [
        'name' => "Retro Hiker Bottle",
        'image' => [
            'src' => "/assets/products/vattenflaskarender.jpg",
            'alt' => "Shoe"
        ],
        'price' => 499,
    ],
    [
        'name' => "Kräm",
        'image' => [
            'src' => "/assets/products/hudvårdrender.jpg",
            'alt' => "Shoe"
        ],
        'price' => 249,
    ],
    [
        'name' => "Mugg",
        'image' => [
            'src' => "/assets/products/mugg.jpg",
            'alt' => "Shoe"
        ],
        'price' => 599,
    ],
    [
        'name' => "Tech-ring",
        'image' => [
            'src' => "/assets/products/ring_klar.jpg",
            'alt' => "Shoe"
        ],
        'price' => 4999,
    ],
    [
        'name' => "Shoe Green",
        'image' => [
            'src' => "/assets/products/sko_grön.jpg",
            'alt' => "Shoe green"
        ],
        'price' => 599,
    ],
    [
        'name' => "Shoe Red",
        'image' => [
            'src' => "/assets/products/sko_röd.jpg",
            'alt' => "Shoe red"
        ],
        'price' => 599,
    ]
];

?>

<!-- Encode php-array to javascript-->
<script>
    const products = <?= json_encode($products) ?>;
</script>