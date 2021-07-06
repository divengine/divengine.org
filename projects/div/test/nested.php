<?php

include "../src/div.php";

use divengine\div;

echo new div('nested', [
    'data' => [
        [
            'name' => 'Category 1',
            'data' => [
                [
                    'name' => 'Subcategory 1',
                    'projects' => [
                        [
                            "name" => "Project A",
                            "url" => "https://projectA.html",
                            "description" => "Tremendo A!"
                        ]
                    ]
                ]
            ],
            'projects' => [
                [
                    "name" => "Project 1",
                    "url" => "https://project1.html",
                    "description" => "Tremendo!"
                ]
            ]
        ]
    ]
]);