<?php

return $products = [
    [
        'id' => 1,
        'category' => 'man',
        'front_image' => '1.webp',
        'back_image' => '1b.webp',
        'brand' => "Levi's",
        'name' => 'Relaxed Fit',
        'price' => 29.99,
        'is_in_favorites' => true,
        'badges' => [
            [
                'type' => 'tag',
                'value' => 'Sostenibilità'
            ],
            [
                'type' => 'discount',
                'value' => '-50%'
            ]
        ]
    ],
    [
        'id' => 2,
        'category' => 'woman',
        'front_image' => '2.webp',
        'back_image' => '2b.webp',
        'brand' => 'Guess',
        'name' => 'Roses Tee',
        'price' => 20.99,
        'is_in_favorites' => true,
        'badges' => [
            [
                'type' => 'discount',
                'value' => '-30%'
            ]
        ]
    ],
    [
        'id' => 3,
        'category' => 'woman',
        'front_image' => '3.webp',
        'back_image' => '3b.webp',
        'brand' => 'Come Zucchero Filato',
        'name' => 'Voglia di colori pastello',
        'price' => 129.99,
        'is_in_favorites' => false,
        'badges' => [
            [
                'type' => 'discount',
                'value' => '-30%'
            ]
        ]
    ],
    [
        'id' => 4,
        'category' => 'man',
        'front_image' => '4.webp',
        'back_image' => '4b.webp',
        'brand' => "Levi's",
        'name' => 'Tee Unisex',
        'price' => 14.99,
        'is_in_favorites' => false,
        'badges' => [
            [
                'type' => 'tag',
                'value' => 'Sostenibilità'
            ],
            [
                'type' => 'discount',
                'value' => '-50%'
            ]
        ]
    ],
    [
        'id' => 5,
        'category' => 'woman',
        'front_image' => '5.webp',
        'back_image' => '5b.webp',
        'brand' => 'Maya Deluxe',
        'name' => 'Stripe Bodice',
        'price' => 99.99,
        'is_in_favorites' => true,
        'badges' => [
            [
                'type' => 'tag',
                'value' => 'Sostenibilità'
            ],
            [
                'type' => 'discount',
                'value' => '-50%'
            ]
        ]
    ],
    [
        'id' => 6,
        'category' => 'woman',
        'front_image' => '6.webp',
        'back_image' => '6b.webp',
        'brand' => 'Esprit',
        'name' => 'Maglione - Black',
        'price' => 29.99,
        'is_in_favorites' => true,
        'badges' => [
            [
                'type' => 'tag',
                'value' => 'Sostenibilità'
            ]
        ]
    ]
];

?>
