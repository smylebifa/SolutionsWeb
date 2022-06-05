
<?php

// 1. Дано трехзначное числа. Найдите сумму его цифр.

// $var = 578; // Объявляем число
// $var .= ''; // Приводим его к строковому типу
// echo $a = $var[2] + $var[1] + $var[0]; // Выводим переменную равную сумме цифр числа


// 2. Дано натуральное число 8. Если оно четное, то уменьшите его в 2 раза, 
// иначе увеличьте в 3 раза.

// ceil — Округляет дробь в большую сторону
// if ($number / 2 == ceil($number / 2))
// {
//   $number = $number / 2;
// }
// else
// {
//   $number = $number *3;
// }

// echo $number


// 3.Дано число. Если оно не меньше 50, то выведите квадрат этого числа, если же
// это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите
// слово "Ошибка".

// $a = 45; // Задаем число $a, например, 45
// if ($a > 50) 
// {
//   echo $b=pow($a,2);
// }

// elseif ($a > 10 & $a < 30) 
// {
//   echo 0;
// }

// else 
// {
//   echo "Ошибка";
// }

?>


<?php

// 4. Пользователь выбирает из выпадающего списка страну (Турция, Египет или
// Италия), вводит количество дней для отдыха и указывает, есть ли у него скидка
// (чекбокс). Вывести стоимость отдыха, которая вычисляется как произведение
// количества дней на 400. Далее это число увеличивается на 10%, если выбран Египет,
// и на 12%, если выбрана Италия. И далее это число уменьшается на 5%, если указана
// скидка.

?>

<!-- <html>
  <head>
    <meta charset="utf-8" />
    <title>Название странички</title>
  </head>
  <body>
 -->
    <?php
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    
    // if (isset($_POST['hero']))
    // {
    //   if($_POST['hero'] == 1)
    //   {
    //     if(isset($_POST['option']))
    //     {
    //       echo" в Италию со скидкой - ". ($_POST['a']*400*1.12*0.95);}
    //     else
    //     {
    //       echo" в Италию без скидки - ". ($_POST['a']*400*1.12);}
    //     }
    //   elseif( $_POST['hero'] == 2)
    //   {
    //     if(isset($_POST['option']))
    //     {
    //       echo" в Египет со скидкой - ". ($_POST['a']*400*1.1*0.95);
    //     }
    //     else
    //     {
    //       echo"Египет без скидки - ".($_POST['a']*400*1.1);
    //     }
    //   }
    //   elseif($_POST['hero'] == 3)
    //   {
    //     if(isset($_POST['option']))
    //     {
    //       echo" в Турцию со скидкой - ". ($_POST['a']*400*0.95);
    //     }
    //     else
    //     {
    //       echo"Турция без скидки - ".($_POST['a']*400);
    //     }
    //   }
    // }

    ?>

<!--     <form method="post">
      <p><select name="hero">
        <option>выбирайте страну из списка </option>
        <option value="1">Италия</option>
        <option value="2">Египет</option>
        <option value="3">Турция</option>
      </select></p>
      
      <p><b>сколько дней отдыха?</b></p>
      <input type="text" name="a" />
      
      <p><b>есть ли у вас скидка?</b></p>
      <input type="checkbox" name="option" value="b"><Br>
      
      <p><input type="submit" value="Отправить"></p>
    </form>
  </body>
</html> -->


<?php

// 5. Дан массив с элементами 'Привет, ', 'мир' и '!'. 
// Необходимо записать в переменную $text фразу 'Привет, мир!', 
// а затем вывести на экран содержимое этой переменной.

// $arr = ['Привет, ', 'мир', '!'];
// $text = $arr[0].$arr[1].$arr[2];

/*
В переменной $text теперь лежит строка 'Привет, мир!'.
Выведем ее на экран:
*/

// echo $text;


// $arr[0] = 'Пока, '; //перезапишем первый элемент массива
// var_dump($arr); //посмотрим на массив и убедимся в том, что он изменился



// 6.Дан массив с числами. Запишите в новый массив только те числа, в которых есть цифра 5.

// function getFives($sArr, String $sInt) 
// {
//   $result = [];
//   foreach ($sArr as $item)
//     // strval - преобразует в строку
//     // strpos - возвращает позицию первого вхождения подстроки
//     if (strpos(strval($item), $sInt) !== false) 
//       $result[] = $item; 
//   return $result;
// }

// $searchInt = 5;
// $searchArr = [2,1,4,3,5,7,6,9,8,11,10,15,29,25,52,13,51];

// echo '<pre>';
// var_dump(getFives($searchArr, $searchInt));
// echo '</pre>';



// 7. Создайте массив вида [1, [2], [[3]], [[[4]]] ], вместо 4 может быть любое целое
// значение. К примеру, если 5 – тогда будет массив [1, [2], [[3]], [[[4]]], [[[[5]]]] ].

// function getMultiArray($level) 
// {
//   $result = $level;
  
//   for ($i = 1; $i < $level; $i++) 
//   {
//     $result = [$result];
//   }
  
//   return $result;
// }

// function strange($value) 
// {
//   $result = [];
  
//   for ($i = 1; $i <= $value; $i++) 
//   {
//     $result[$i] = getMultiArray($i);
//   }
  
//   return $result;
// }

// print_r(strange(5));




// 8. Напишите функцию, которая будет сливать два массива таким образом: из, к
// примеру, [1, 2, 3] и ['a', 'b', 'c'] она сделает [1, 'a', 2, 'b', 3, 'c'].
// Сделайте аналогичную функцию, которая параметрами будет принимать
// не два массива, а произвольное количество (пусть функция параметром принимает
// двухмерный массив, где его подмассивы – это то, что мы будем сливать).

// ... - переменное количество аргументов
// function array_strange_merge(...$arrays) 
// {
//   $maxLength = 0;
//   foreach ($arrays as $array) 
//   {
//     $maxLength = max(count($array), $maxLength);
//   }
  
//   $result = [];
//   for ($i = 0; $i < $maxLength; $i++) 
//   {
//     foreach ($arrays as $array) 
//     {
//       // isset - определяет, была ли установлена переменная значением, отличным от null
//       if (isset($array[$i])) 
//       {
//         $result[] = $array[$i];
//       }
//     }
//   }
  
//   return $result;
// }

// print_r(array_strange_merge([1,2,3], ['a','b','c','d']));



// 9. Дан массив вида [1, ' , 2, ' , ' , 3] – то есть в нем есть пустые строки. Удалите все
// такие элементы из этого массива.*

$unCleanList = [1, '' , 2, '', '', 3];
$filteredList = array_filter($unCleanList);
var_dump($filteredList);


// 10. Напишите функцию, которая корректно будет складывать часы и минуты.
// Примеры: на вход функции подается такое – 1ч20мин+50мин – в результатте функция
// выведет 2ч10мин.

function h2s($h) 
{
  $h = $h/3600 % 24;
  $h = $h % 10 ? "0".$h : $h;
  $h = $h == 0 ? $h = "00" : $h;
  return $h;
}

function m2s($m) 
{
  $m = $m/60 % 60;
  $m = $m % 10 ? "0".$m : $m;
  $m = $m == 0 ? $m = "00" : $m;
  return $m;
}

function s($s) 
{
  $s = $s % 60;
  $s = $s % 10 ? "0".$s : $s;
  $s = $s == 0 ? $s = "00" : $s;
  return $s;
}

function normal2seconds($normal) 
{
  $hms = explode(":",$normal);
  $h = $hms[0]*3600;
  $m = $hms[1]*60;
  $s = $hms[2];
  return $h+$m+$s;
}

function seconds2normal($seconds) 
{
  $v = max($seconds,0);
  $h = h2s($v);
  $m = m2s($v);
  $s = s($s);
  return " $h:$m:$s";
}

function timePlus() 
{
  $times = func_get_args();
  for ($i=0;$i<count($times);$i++) 
  {
    $nowtime = explode(":",$times[$i]);
    $time += normal2seconds(" $nowtime[0]:$nowtime[1]:$nowtime[2]"); 
  }
  
  return seconds2normal($time);
}

echo timePlus("01:20:00","00:50:00");















?>




<?php


// file:///D:/Programming%20and%20studying/Web/Backend/PHP/Grigorev_R._Zadachnik_Po_Php_S_Resheniyami.pdf



