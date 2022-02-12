<?php include '../include/header.php'?>
<?php
/*
Используя данные из таблицы составьте массив, содержащий данные на всех президентов США с начала 20 века.
Для каждого президента в массиве должна присутствовать информация:
ФИО,
год начала срока,
год конца срока,
партийная принадлежность,
продолжительность президентства в днях,
список ФИО вице-президентов.
a) Подсчитайте количество демократов и республиканцев.
b) Выведите список всех имен президентов.
c) Выведите список всех вице-президентов при демократах и список при республиканцах.
d) Найдите, кто из вице-президентов был также и президентом.
f) Отсортируйте массив президентов в порядке их президентства.
e) Отсортируйте массив президентов по сроку их президентства по возрастанию.
g) Подсчитайте количество дней президентства всех президентов демократов и республиканцев отдельно.
*/
// class Presidents
// {
//   function __construct($name, $year_start, $year_end, $consignment, $duration, $vice)
//   {
//
//   }
// }

$presidents = [
  [
    'name' => 'Джо Байден',
    'year_start' => 2021,
    'year_end' => 2025,
    'consignment' => 'Демократ',
    'duration' => 370,
    'vice' => ['Камала Харрис', 'тест'],

  ],[
    'name' => 'Дональд Трамп',
    'year_start' => 2017,
    'year_end' => 2021,
    'consignment' => 'Республиканец',
    'duration' => 1461,
    'vice' => ['Майк Пенс',],
  ],[
    'name' => 'Барак Обама',
    'year_start' => 2009,
    'year_end' => 2017,
    'consignment' => 'Демократ',
    'duration' => 2922,
    'vice' => ['Джо Байден',],
  ],[
    'name' => 'Джордж Уокер Буш',
    'year_start' => 2001,
    'year_end' => 2009,
    'consignment' => 'Республиканец',
    'duration' => 2922,
    'vice' => ['Дик Чейни',],
  ],[
    'name' => 'Билл Клинтон',
    'year_start' => 1993,
    'year_end' => 2001,
    'consignment' => 'Демократ',
    'duration' => 2922,
    'vice' => ['Альберт Гор', 'Барак Обама'],
  ],
];

// a)
show_messege('Подсчитайте количество демократов и республиканцев.');

$democrat = [];
$republican = [];
foreach ($presidents as $value) {
  $value['consignment'] == 'Демократ' ? $democrat[] = $value : $republican[] = $value;
}

pre_start();
echo "Демократов: ".count($democrat);
pre_center();
echo "Республиканцев: ".count($republican);
pre_end();




// b) *
show_messege('Выведите список всех имен президентов.');

$name = array_column($presidents, 'name');
$name_only = array_map(fn ($item) => trim(explode(' ',$item)[0]), $name);

pre_start();
print_r(implode(', ',$name_only));
pre_end();




// c)
show_messege('Выведите список всех вице-президентов при демократах и список при республиканцах.');

$vice_demo = array_map(function ($item){
    return implode(', ',$item["vice"]);
}, $democrat);
$vice_resp = array_map(function ($item){
    return implode(', ',$item["vice"]);
}, $republican);

pre_start();
echo "У демократов : ". implode(', ',$vice_demo);
pre_end();
pre_start();
echo "У республиканцев : ". implode(', ',$vice_resp);
pre_end();





// d)
show_messege('Найдите, кто из вице-президентов был также и президентом.');
$name_vice = implode(', ',$vice_demo).", ".implode(', ',$vice_resp);
$name_vice = explode(', ', $name_vice);

pre_start();
print_r(array_intersect($name,$name_vice));
pre_end();




// f)
show_messege('Отсортируйте массив президентов в порядке их президентства.');

usort($presidents, function ($a, $b) {
  return $a['year_start'] - $b['year_start'];
});
pre_start();
print_r($presidents);
pre_end();




// e)
show_messege('Отсортируйте массив президентов по сроку их президентства по возрастанию.');
usort($presidents, function ($a, $b) {
  return $a['duration'] - $b['duration'];
});
pre_start();
print_r($presidents);
pre_end();




// g)
show_messege('Подсчитайте количество дней президентства всех президентов демократов и республиканцев отдельно.');
$duration_demo = array_column($democrat, 'duration');
$duration_resp = array_column($republican, 'duration');

pre_start();
echo array_sum($duration_demo)." - Именно столько дней правили демократы";
pre_end();
pre_start();
echo array_sum($duration_resp)." - Именно столько дней правили республиканцы";
pre_end();



?>
<?php include '../include/footer.php'?>
