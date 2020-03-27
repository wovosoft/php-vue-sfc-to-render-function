<?php
include_once __DIR__ . "/functions.php";

$output = h(
    "html",
    [],
    [
        h(
            "head",
            [],
            [
                eh(
                    "link",
                    [
                        "attrs" => [
                            "rel" => "stylesheet",
                            "href" => "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                        ],

                    ]
                )
            ]
        ),
        h(
            "body",
            [],
            [
                h(
                    "div",
                    [
                        "attrs" => [
                            "class" => "container"
                        ]
                    ],
                    [
                        h(
                            "button",
                            [
                                "attrs" => [
                                    "class" => "btn btn-primary"
                                ]
                            ],
                            [
                                "This is button"
                            ]
                        )
                    ]
                )
            ]
        )
    ]
);
echo "\n" . $output . "\n";
