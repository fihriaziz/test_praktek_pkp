<?php

$data = [
        ["user"=>"andi","action"=>"login"],
        ["user"=>"budi","action"=>"login"],
        ["user"=>"andi","action"=>"logout"],
        ["user"=>"citra","action"=>"login"]
];

$activeUsers = [];
foreach($data as $log) {
    $user = $log['user'];
    $action = $log['action'];

    if($action === "login") {
        $activeUsers[$user] = true;
    } else if($action === "logout") {
        unset($activeUsers[$user]);
    }
}

$result = array_keys($activeUsers);
print_r($result);