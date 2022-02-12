<?php include '../include/header.php'?>
<?php
// Напишите несколько функций:
// a) функцию array_single_items() , которая принимает первым обязательным аргументом массив, и ещё любое произвольное количество аргументов,
// тоже массивов. Функция должна вернуть массив из тех уникальных элементов, которые встречаются всего один раз только в одном и больше ни в каком другом массиве.
// Например, array_single_items([1, 2], [2, 3, 1]) вернет массив [3];
function array_single_items( array $value, ...$arguments): array {
    $glob_arr = array_merge($value, ...$arguments);
    $glob_arr = array_count_values($glob_arr);
    $glob_arr = array_filter($glob_arr, fn ($item) => $item == 1 ? true : false);
    return array_keys($glob_arr);
};
pre_start();
print_r( array_single_items([1,6,3],[3,7,1],[5,4,6]));
pre_end();



// b) функцию array_const_items(), которая принимает те же аргументы, что и в пункте a. Функция должна вернуть массив из тех повторяющихся элементов,
// которые встречаются хотя бы один раз в каждом из массивов. Например, array_const_items([1, 2], [2, 3, 1]) вернет массив [1, 2];

function array_const_items( array $value, ...$arguments): array {
    return array_intersect($value, ...$arguments);
};
pre_start();
print_r( array_const_items([1,6,3],[3,7,1],[5,4,1,3,6]));
pre_end();


?>
<?php include '../include/footer.php'?>
