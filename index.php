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
                            "div",
                            [
                                "attrs" => [
                                    "class" => "row"
                                ]
                            ],
                            [
                                h(
                                    "div",
                                    [
                                        "attrs" => [
                                            "class" => "col-md-12"
                                        ]
                                    ],
                                    [
                                        h("h1", [
                                            "attrs" => [
                                                "class" => "text-center"
                                            ]
                                        ], ["Amar Sonar Bangla, Ami Tomay Valobasi"])
                                    ]
                                )
                            ]
                        )
                    ]
                )
            ]
        )
    ]
);
echo "\n" . $output . "\n";
