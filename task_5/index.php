<?php include '../include/header.php'?>
<?php
/*
Напишите скрипт, который выводит список всех високосных годов (по григорианскому календарю) во втором тысячелетии.
a) Используя цикл for
b) Используя цикл while
*/
function leap_year( int $value=0) {
  return $value % 100 ? !($value % 4) : !($value % 400);
};


$year_for = [];
for ($i = 2000; $i < 3000; ++$i){
  if (leap_year($i)) {
    $year_for[] = $i;
  }
};



pre_start();
print_r($year_for);
pre_end();



// $year_while = [];
// $a = 2000;
// while ($a < 3000) {
//   if(leap_year($a)){
//     $year_while[] = $a;
//   }
//   ++$a;
// }
// pre_start();
// print_r($year_while);
// pre_end();

?>
<?php include '../include/footer.php'?>
