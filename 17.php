<?php
$data = [
    'authors' => [
        301 => [
            'id' => 301,
            'name' => 'Александр Сергеевич Пушкин',
            'email' => 'alexander_pushkin@example.com',
            'birthYear' => 1799,
        ],
        10 => [
            'id' => 10,
            'name' => 'Николай Васильевич Гоголь',
            'email' => 'nikolay_gogol@example.com',
            'birthYear' => 1809,
        ],
        17 => [
            'id' => 17,
            'name' => 'Михаил Юрьевич Лермонтов',
            'email' => 'mikhail_lermontov@example.com',
            'birthYear' => 1814,
        ],
    ],
    'books' => [
        [
            'title' => 'Евгений Онегин',
            'publishedAt' => '1823—1832',
            'author' => 301,
        ],
        [
            'title' => 'Полтава',
            'publishedAt' => '1828—1829',
            'author' => 301,
        ],
        [
            'title' => 'Мёртвые души',
            'publishedAt' => '1842',
            'author' => 10,
        ],
        [
            'title' => 'Сказка о рыбаке и рыбке',
            'publishedAt' => '1833',
            'author' => 301,

        ],
    ],
];

/* ===== Ваш код ниже ===== */

echo '=== Авторы ===<br>';
// Ваш код здесь


echo $data['authors'][301]['name'] . ' - ' . $data['authors'][301]['email'] 
. ' - ' . $data['authors'][301]['birthYear'];
echo '<br>';
echo $data['authors'][10]['name'] . ' - ' . $data['authors'][10]['email'] 
. ' - ' . $data['authors'][10]['birthYear'];
echo '<br>';
echo $data['authors'][17]['name'] . ' - ' . $data['authors'][17]['email'] 
. ' - ' . $data['authors'][17]['birthYear'];
echo '<br>';


/*foreach($data as $level1_key => $level1_value) {
    if ($level1_key == 'authors'){
        foreach($level1_value as $level2_key => $level2_value){
                echo $level2_value['name'] . ' - ' . $level2_value['email'] . ' - ' . 
                $level2_value['birthYear'];
                echo '<br>';
        }
    }
}*/
echo '=== Книги ===<br>';
// Ваш код здесь
echo $data['books'][0]['title'] . ' - ' . $data['authors'][$data['books'][0]['author']]['name']
. ' - ' . $data['books'][0]['publishedAt'];
echo '<br>';
echo $data['books'][1]['title'] . ' - ' . $data['authors'][$data['books'][1]['author']]['name']
. ' - ' . $data['books'][1]['publishedAt'];
echo '<br>';
echo $data['books'][2]['title'] . ' - ' . $data['authors'][$data['books'][2]['author']]['name']
. ' - ' . $data['books'][2]['publishedAt'];
echo '<br>';
echo $data['books'][3]['title'] . ' - ' . $data['authors'][$data['books'][3]['author']]['name']
. ' - ' . $data['books'][3]['publishedAt'];
/*foreach($data as $level1_key => $level1_value) {
    if ($level1_key == 'books'){
        foreach($level1_value as $level2_value){
                echo $level2_value['title'] . ' - ' . $level2_value['author'] . ' - ' . 
                $level2_value['publishedAt'];
                echo '<br>';
        }
    }
}*/