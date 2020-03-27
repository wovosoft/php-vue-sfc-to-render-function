<?php

/**
 *
 * <script>
 * export default{
 * name: "Component",
 * data(){
 * return {
 * msg: "Hello Narayan"
 * }
 * }
 * }
 * </script>
 */
include_once __DIR__ . "/vue_to_render.php";

$test = new VueRender();
$test->setData([
    "msg" => "Hello Narayan",
    "body" => "This is body",
    "working_binary" => true
]);
$test->setName("TestVue");
$test->setTemplate([
    "el" => "ul",
    "class" => [
        "is-red" => true
    ],
    "children" => [
        [
            "el" => "li",
            "class" => [
                "is-black" => true
            ],
            "children" => "__VAR__this.msg"
        ],
        [
            "el" => "li",
            "class" => [
                "is-black" => true
            ],
            "children" => [
                [
                    "el" => "li",
                    "class" => [
                        "is-black" => true
                    ],
                    "children" => "Amar"
                ],
                [
                    "el" => "li",
                    "class" => [
                        "is-black" => true
                    ],
                    "children" => "Sonar"
                ],
                [
                    "el" => "li",
                    "class" => [
                        "is-black" => true
                    ],
                    "children" => "Bangla"
                ]
            ]
        ]
    ]
]);
$output = $test->render();
file_put_contents(__DIR__ . "/src/components/Test.js", $output);
echo $output;
echo "\n\n";
