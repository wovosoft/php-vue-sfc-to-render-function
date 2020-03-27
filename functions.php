<?php
/**
 * Element Parsing
 */
function h($el, $attrs = [], $children = [])
{

    $classes = "";
    if (isset($attrs["class"])) {
        $classes = " class=\"" . implode(" ", $attrs["class"]) . "\"";
    }
    $attributes = "";
    if (isset($attrs["attrs"]) && $attrs["attrs"]) {
        $attributes = a($attrs["attrs"]);
    }

    $open = "<$el$classes$attributes>";
    $content = implode("", $children);

    return $open . $content . "</$el>";
}
/**
 * Empty Element HyperText
 */
function eh($el, $attrs = [], $children = [])
{

    $classes = "";
    if (isset($attrs["class"])) {
        $classes = " class=\"" . implode(" ", $attrs["class"]) . "\"";
    }
    $attributes = "";
    if (isset($attrs["attrs"]) && $attrs["attrs"]) {
        $attributes = a($attrs["attrs"]);
    }

    $open = "<$el$classes$attributes />";
    $content = implode("", $children);

    return $open;
}
/**
 * Attribute Parsing
 */
function a($attr = [])
{
    $output = "";
    foreach ($attr as $key => $val) {
        $output .= " $key=\"$val\"";
    }
    return $output;
}
