<?php

sleep(2);

// $postdata = file_get_contents("php://input");
// $request = json_decode($postdata);
// e.g. $request->thumbnail_url

$item_list = array(
    "thumbnail_url" => "http://omaha3dprint.dev/assets/img/archer_stl.png",
    "name" => "file9001.stl",
    "price" => "99.23",
    "settings" => array(
        "plastic" => "White ABS",
        "resolution" => "0.1",
        "perimeter_layers" => "2",
        "percent_infill" => "23",
        "infill_type" => "honeycomb"
    )
);

header('Content-Type:application/json');

print(json_encode($item_list));