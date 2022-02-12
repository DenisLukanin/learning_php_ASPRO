<?php include '../include/header.php'?>
<?php
/*
Напишите скрипт, который выводит сообщение о том, относится ли продукт из переменной $product к фруктам, или относится к овощам.
Скрипт должен различать названия не менее 3 разных фруктов и 3 овощей.
a Используя многочисленные вложенные друг в друга конструкции if else
b Используя конструкцию if elseif
c Используя конструкцию switch
*/


// $fruts = ["банан", "яблоко", "груша"];
// $vegetables = ['картошка', 'лук', 'мороковь'];
// function smart_gardener($value='default' use $fruts = &$GLOBALS['fruts']; )
// {
//   if ($fruts[0] == "банан") {
//     echo "Так и знал";
//   }
// };
// smart_gardener();



// a)
function stupid_gardener_1($value='default'){
  if (($value !== 'яблоко') && ($value !== 'груша') && ($value !== 'банан')) {
      if (($value !== 'картошка') && ($value !== 'лук') && ($value !== 'мороковь')) {
        echo "Результат 1 функции: Я такого незнаю(";
      }else {
        echo "Результат 1 функции: Это овощь!";
      }
  } else {
    echo "Результат 1 функции: Это фрукт!";
  }
};
stupid_gardener_1('картошка');
echo "<br>";




// b)
function stupid_gardener_2($value='default'){
  if (($value == 'картошка') || ($value == 'лук') || ($value == 'мороковь')) {
    echo "Результат 2 функции: Это овощь!";
  } elseif (($value == 'яблоко') || ($value == 'груша') || ($value == 'банан')) {
    echo "Результат 2 функции: Это фрукт!";
  } else {
    echo "Результат 2 функции: Я такого незнаю(";
  }
};
stupid_gardener_2('мандарин');
echo "<br>";




// c)
function stupid_gardener_3($value='default'){
  switch ($value) {
    case 'банан':
    case 'яблоко':
    case 'груша':
      echo "Результат 3 функции: Это фрукт!";
      break;
    case 'картошка':
    case 'лук':
    case 'мороковь':
      echo 'Результат 3 функции: Это овощь!';
      break;
    default:
      echo "Результат 3 функции: я такого не знаю(";
      break;
  }
};
stupid_gardener_3('груша');




 ?>
<?php include '../include/footer.php'?>
