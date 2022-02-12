<?php include '../include/header.php'?>
<?php
  // 3)
  $one = '1';
  $two = '2';
  // 3.a)
  echo $one + $two;
  echo "<pre>";


  // 3.b)
  $three = 'that';
  $foгe = 'will';
  $test = $three + $fore;
  var_dump ($test);
  echo "<pre>";
  /*
  оператор "+" ожидает что будут переданы числа для сложения, но зачения переменных не начинаются с чисел, поэтому выдается предупреждение
  о том что в преобразуемых переменных строковые значения не имеют чисил.
  Строка преобразуется в число 0 а 0 + 0 = 0
  */


  // echo "<pre>";
  // print_r($_REQUEST);
  // echo "<pre>";

?>
<?php include '../include/footer.php'?>
