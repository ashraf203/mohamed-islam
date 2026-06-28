<?php

$users = [
    [
        'id' => 1,
        'name' => 'aya',
        'activities' => (object)[
            'first' => 'gem',
            'second' => 'football'
        ]
    ],
    [
        'id' => 2,
        'name' => 'sara',
        'activities' => [
            'reading',
            'runing'
        ]
    ]
];

echo $users[0]['name'];
echo $users[1]['activities'][1];
echo $users[0]['activities']->second;
print_r($users[0]['activities']->first);
echo $users[1]['activities'][0];
