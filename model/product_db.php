<?php

function get_products() {
    global $db;
    $query = 'SELECT * FROM products
    ORDER BY productCode';
    $all_products = $db->query($query);
    return $all_products;
}

function delete_product($product_item) {
    global $db;
    $query = "DELETE FROM products
    WHERE productCode = '$product_item'";
    $db->exec($query);
}


function add_product($product_item, $name, $version, $release_date) {
    global $db;
    $query = "INSERT INTO products
    (productCode, name, version, releaseDate)
    VALUES
    ('$product_item', '$name', '$version', '$release_date')";
    $db->exec($query);
}
?>