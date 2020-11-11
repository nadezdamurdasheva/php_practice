<?php
$basket = [
    [
        'position' => '12Книга по php',
        'quantity' => 9,
    ],
    [
        'position' => '123Мышь беспроводная',
        'quantity' => 9,
    ],
];
function countBasket($array) {
    $sum_positions = 0;
    foreach ($array as $item){
        foreach ($item as $key => $value){
            if ($key == 'quantity') {
                $sum_positions += $value;
            }
        }
    }
    return $sum_positions;
}
echo countBasket($basket);
