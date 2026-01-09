<?php
function groupByCategory($products)
{
    $result = [];

    foreach($products as $product) {
        $category = $product['category'];
        $name = $product['name'];

        if(!isset($result[$category])) {
            $result[$category] = [];
        }
        $result[$category][] = $name;
    }
    return $result;
}

$products = [
  ["name" => "Keyboard", "category" => "Electronics"],
  ["name" => "Apple", "category" => "Fruits"],
  ["name" => "Mouse", "category" => "Electronics"],
];

print_r(groupByCategory($products));