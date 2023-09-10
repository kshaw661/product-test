<?php
function display_cars_table($sort='asc'){
    $jsonData = file_get_contents('testJson.json');
    $products = json_decode($jsonData, true);
    
    if (isset($sort) && $sort!='') {
        $sortKey = $sort;
        if ($sortKey === 'asc') {
            usort($products, function ($a, $b) {
                return $a['price'] - $b['price'];
            });
        }else{
            usort($products, function ($a, $b) {
                return $b['price'] - $a['price'];
            }); 
        }
    }
    $table = '';
    foreach ($products as $product) {
        $color = $product['color'] == 'White' ? 'Grey': $product['color'];
        $table .= "<tr>
                    <td>{$product['car_name']}</td>
                    <td>{$product['price']}</td>
                    <td style='color:{$color}'>{$product['color']}</td>
                    <td>{$product['discount']}</td>
                    <td>{$product['hand']}</td>
                    <td>{$product['availability']}</td>
                </tr>";
    }
    return $table;
}
?>