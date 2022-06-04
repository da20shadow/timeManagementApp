<?php
$userList = [
    ["id" => 1, "username" => "vipearn", "password" => "asd", "email"=> "vipearn@abv.bg"],
    ["id" => 2, "username" => "wipstars", "password" => "asd", "email"=> "wipstars@abv.bg"],
    ["id" => 3, "username" => "john", "password" => "asd", "email"=> "john@abv.bg"],
    ["id" => 4, "username" => "peter", "password" => "asd", "email"=> "peter@abv.bg"],
    ["id" => 5, "username" => "doe", "password" => "asd", "email"=> "doe@abv.bg"]
];

echo json_encode($userList);