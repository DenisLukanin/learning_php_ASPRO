<?php include '../include/header.php'?>
<?php
show_messege('Используя конструкцию list() напишите выражение, которое меняет местами значения в двух переменных $foo и $bar.');
$foo = "value foo";
$bar = "value bar";
pre_start();
echo "Вывожу foo $foo";
pre_center();
echo "Вывожу bar $bar";
pre_end();

$array = [$foo,$bar];


list($bar,$foo) = $array;
pre_start();
echo "Вывожу foo $foo";
pre_center();
echo "Вывожу bar $bar";
pre_end();
?>

<?php include '../include/footer.php'?>
