<?php

require_once __DIR__ . '\classes\Cow.php';
require_once __DIR__ . '\classes\Chicken.php';

$mas_cow = [];// массив коров
$mas_chicken = [];// массив куриц
$mas_id = [];// массив уникальных рег номеров всех животных

//функция создания уникального номера
function uniId($new_mas_id)
{
    if (empty($new_mas_id)) {
        return 0;
    } else {
        return max($new_mas_id) + 1;
    }

}

//создание коров
for ($i = 0; $i < 10; $i++) {
    $cow = new Cow();
    $cow->setId(uniId($mas_id));
    $mas_id[] = $cow->getId();
    $mas_cow[] = $cow;
}
//создание куриц
for ($i = 0; $i < 20; $i++) {
    $ch = new Chicken();
    $ch->setId(uniId($mas_id));
    $mas_id[] = $ch->getId();
    $mas_chicken[] = $ch;
}

//доим коров
for ($i = 0; $i < count($mas_cow); $i++) {
    $mas_cow[$i]->work_product = $mas_cow[$i]->getWorkProduct();
}
//собираем яйца
for ($i = 0; $i < count($mas_chicken); $i++) {
    $mas_chicken[$i]->work_product = $mas_chicken[$i]->getWorkProduct();
}


$sum_cow_product = 0;//сумма литров
$sum_ch_product = 0;//сумма яиц

//выводим информацию о корове
foreach ($mas_cow as $f_mas_cow) {
    $work_product = $f_mas_cow->work_product;
    $sum_cow_product += $work_product;
    echo "Номер коровы: {$f_mas_cow->getId()} Дала: $work_product литров <br>";
}
echo 'Общее кол-во литров: ' . $sum_cow_product . '<br><br>';

//выводим информацию о курице
foreach ($mas_chicken as $f_mas_ch) {
    $work_product = $f_mas_ch->work_product;
    $id = $f_mas_ch->getId();
    $sum_ch_product += $work_product;
    echo "Номер курицы: {$id} Снесла: $work_product яиц <br>";
}
echo 'Общее кол-во яиц: ' . $sum_ch_product . '<br><br>';

// все можно было сделать более компактно в 2 раза, если подключить бд и вставить проверку на роль (курица/корова)
// или добавить все в один массив животные и при сборе продукции, собирать из массива всех животных + проверка на принадлежность к классу







