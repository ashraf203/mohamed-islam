<?php
$categories = [
    'Id' => 1,
    'name' => 'modiles',
    'subcategories' => [
        'samaung' => [
            (object) [
                'id' => 50,
                'name' => 'NOTE 10',
                'prices' => [5000, 6000],
                'madeIn' => ['china', 'german'],
                'colors' => ['primary' => 'black', 'secondaryColors' => ['red', 'blue']],
            ],
            (object) [
                'id' => 51,
                'name' => 'S20',
                'prices' => [7000, 8000],
                'madeIn' => ['china', 'germany'],
                'colors' => ['primary' => 'white', 'secondaryColors' => ['brown', 'orange']],
            ]
        ],
        'apple' => [
            (object)[
                'id' => 70,
                'name' => 'Iphone x',
                'prices' => 20000,
                'madeIn' => (object) ['country' => 'china'],
                'colors' => ['red', 'green', 'black'],
            ],
            (object)[
                'id' => 80,
                'name' => 'Iphone 12',
                'prices' => 60000,
                'madeIn' => (object) ['country' => 'china'],
                'colors' => [
                    (object) ['primary' => 'black'],
                    (object) [
                        'secondaryColors' =>
                        [
                            'red',
                            'blue'
                        ]
                    ]
                ],
            ]
        ],
        'oppo' => [
            (object)[
                'id' => 90,
                'name' => 'Oppo f1',
                'prices' => [],
                'madeIn' => [],
                'colors' => [],
            ],
            (object)[
                'id' => 100,
                'name' => 'Oppo f2',
                'prices' => [],
                'madeIn' => [],
                'colors' => [],
            ]
        ]
    ]
];
