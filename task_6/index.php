<?php include '../include/header.php'?>
<?php
/*
Создайте 3 массива по 3 элемента в каждом: фрукты, овощи, ягоды. Изучите список функций для работы с массивом.
a) Создайте 4 массив, в котором объединены все элементы 3 массивов.
b) Добавьте в начало полученного массива ещё ягоду соответствующей функцией.
c) Добавьте в конец массива еще овощ соответствующей конструкцией языка.
d) Добавьте в конец массива еще фрукт соответствующей функцией. Напишите в комментарии в чем отличие
   добавления новых элементов в конец массива между конструкцией языка и отдельной функцией.
e) Перемешайте элементы массива.
f) Проверьте, есть ли в массиве яблоки.
g) Выведите количество элементов в массиве.
h) Найдите в массиве индекс последней добавленной ягоды (из пункта b).
i) Пройдите элементы полученного массива циклом for и удалите из него последние 3 добавленных элемента (из пунктов b, c, d).
j) Отфильтруйте полученный массив используя соответствующую функцию так, чтобы из него удалились все овощи.
k) Отсортируйте элементы полученного массива так, чтобы вначале массива были фрукты, а только потом ягоды. Причем между собой фрукты
   и ягоды отсортированы по длине названия от самого короткого к самому длинному.
l) Измените порядок следования элементов массива в обратном порядке.
m) Выведите в строку список элементов массива, разделенные запятой и пробелом.
*/
$fruts = ['груша', 'яблоко', 'апельсин'];
$vegetables = ['картошка','лук','морковь'];
$berries = ['клубника','черешня','малина'];

// a)
show_messege('Создайте 4 массив, в котором объединены все элементы 3 массивов.');
$garden = array_merge($fruts,$vegetables,$berries);
pre_start();
print_r($garden);
pre_end();

// b)
show_messege('Добавьте в начало полученного массива ещё ягоду соответствующей функцией.');
$new_berries = 'ежевика';
array_unshift($garden, $new_berries);
pre_start();
print_r($garden);
pre_end();

// c)
show_messege('Добавьте в конец массива еще овощ соответствующей конструкцией языка.');
$new_vegetables[] = 'капуста';
pre_start();
print_r($garden);
pre_end();

// d)
show_messege('Добавьте в конец массива еще фрукт соответствующей функцией. Напишите в комментарии в чем отличие
   добавления новых элементов в конец массива между конструкцией языка и отдельной функцией.');
$new_fruts = 'дыня';
array_push($garden, $new_fruts);
pre_start();
print_r($garden);
pre_end();



// e)
show_messege('Перемешайте элементы массива');
shuffle($garden);
pre_start();
print_r($garden);
pre_end();




// f)
show_messege('Проверьте, есть ли в массиве яблоки.');
$test = in_array('яблоко', $garden);
pre_start();
var_dump($test);
pre_end();




// g)
show_messege('Выведите количество элементов в массиве.');
$length = count($garden);
pre_start();
print_r($length);
pre_end();



// h)
show_messege('h) Найдите в массиве индекс последней добавленной ягоды (из пункта b).');
$last_index = array_search($new_berries , $garden);
pre_start();
print_r($garden);
pre_center();
print_r($last_index);
pre_end();



// i)
show_messege('i) Пройдите элементы полученного массива циклом for и удалите из него последние 3 добавленных элемента (из пунктов b, c, d).');
$new_value = [$new_fruts, $new_vegetables, $new_berries];
for ($i=0 , $length = count($garden) ; $i <= $length; ++$i) {
  if (in_array($garden[$i] , $new_value)){
    unset($garden[$i]);
  }
};
pre_start();
print_r($garden);
pre_end();



// j)
show_messege('Отфильтруйте полученный массив используя соответствующую функцию так, чтобы из него удалились все овощи.');
$garden = array_filter($garden, function ($item){
  global $vegetables;

  if (in_array($item , $vegetables)){
    return false;
  }
  return true;
});
pre_start();
print_r($garden);
pre_end();




// k)
show_messege('Отсортируйте элементы полученного массива так, чтобы вначале массива были фрукты, а только потом ягоды.
    Причем между собой фрукты и ягоды отсортированы по длине названия от самого короткого к самому длинному.');
uasort($garden, function ($a, $b){
  global $fruts;
  global $berries;


  if(in_array($a,$fruts) && in_array($b,$berries)){
    return 1;
  } elseif (in_array($a,$berries) && in_array($b,$fruts)) {
    return -1;
  } else {
    return strlen($a) - strlen($b);
  }

});
pre_start();
print_r($garden);
pre_end();




// l)
show_messege('Измените порядок следования элементов массива в обратном порядке.');

pre_start();
print_r(array_reverse($garden));
pre_end();




// m)
show_messege('Выведите в строку список элементов массива, разделенные запятой и пробелом.');
pre_start();
print_r(implode(', ',$garden));
pre_end();




?>
<?php include '../include/footer.php'?>
