<?php include '../include/header.php'?>
<?php
show_messege('Составьте список для покупки продуктов. Список должен содержать в себе не менее 3 разных позиций.
Каждая позиция - это массив с названием продукта, его ценой, и количеством для покупки.
Используя деструктуризацию массива в цикле по позициям в списке, выведите все его строки по шаблону название количество*цена=сумма . <br><br>');

$shopping_list = [
  [
    'name' => 'пельмени',
    'price' => 2000,
    'count' => 2,
  ],
  [
    'name' => 'орехи',
    'price' => 450,
    'count' => 10,
  ],
  [
    'name' => 'конфеты',
    'price' => 78,
    'count' => 23,
  ],
];

foreach ($shopping_list as list('name' => $name, 'price' => $price, 'count' => $count)) {
  echo "На $name я потрчу $price * $count  = ".$price * $count." рублей <br>";
}
 ?>
<?php include '../include/footer.php'?>
