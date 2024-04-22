<?php
$advanced_section[] = array(
    "type" => "sub_group",
    "id" => "mk_options_custom_css",
    "name" => __("Advanced / Custom CSS", "mk_framework") ,
    "desc" => __("", "mk_framework") ,
    "fields" => array(
        array(
            "name" => __("Custom CSS", "mk_framework") ,
            "desc" => __("Enter custom CSS to modify/add Theme stylings.", "mk_framework") ,
            "id" => "custom_css",
            'el_class' => 'mk_black_white',
            "default" => '',
            "rows" => 30,
            "type" => "textarea"
        ) ,
    ) ,
);
