<?php
/** 
1. Создать 2 класса Пират и Бочка Рома
2. Сделать так, что бы в бочке не могло быть отрицательное кол-во рома
3. Кажрый пират может быть трезв или пьян. что бы стать пьяным пирату нужно 1 единица рома.
5. Создать массив Пиратов и бочку рома, попросить всех пиратов напиться, если ром закончился пират напиться не может.
6. вывести результат (какой из пиратов напислся , а какой нет)
*/

class Pirate {
  private $drunk = false;
  
  function toDrunk($bochka) {
    if (!$this->drunk and $bochka->drinkRum())
    {
      $this->drunk = true;      
    }
  }
     
}

class Barrel {
  
  private $rum = 10;
  
  function drinkRum() {

    if ($this->rum <= 0) {
      echo 'Rum is waste\n';
      return false;      
    }
    else 
    {
      $this->rum -= 1;
      return true;
    }    
  }
  
  function getRum(){
    return $this->rum;
  }  
  
}
$myBarrel = new Barrel;

var_dump($myBarrel->drinkRum());
var_dump($myBarrel);

$arrayPirates = array();

for ($i = 0; $i < 15; $i++)
{
  $arrayPirates[$i] = new Pirate();
  
  $arrayPirates[$i]->toDrunk($myBarrel);
  $arrayPirates[$i]->toDrunk($myBarrel);
  
}

var_dump($myBarrel);
var_dump($arrayPirates);
