# Task 4

Массив с данными.

Вы делаете страницу каталога handmade товаров. Основные данные в каталоге - это мастера и их товары. Количество мастеров и товаров не ограничено. Но вы точно знаете, что каждый товар изготавливает только один мастер.

Вам необходимо создать единственный массив $data, и придумать его структуру таким образом, чтобы можно было удобно хранить информацию по мастерам и их товарам.

Для товара нужно хранить следующую информацию: Наименование товара, Цена, Мастер
О мастере нужно хранить следующую информацию о нем: Никнейм, Город, Доставка (Да/Нет)

Учтите, что набор полей в будущем может расширяться.

```
$master = [
  [
    'nickname' => 'Nick',
    'city' => 'Москва',
    'delivery' => 'Да',
  ],

  [
    'nickname' => 'Чебурашка',
    'city' => 'Челябинск',
    'delivery' => 'Нет',
  ],

  [
    'nickname' => 'Black',
    'city' => 'Казань',
    'delivery' => 'Нет',
  ],

];

$goods = [
  [
    'name' => 'Бетон',
    'price' => '100',
    'master' => 'Nick',
  ],

  [
    'name' => 'Герб',
    'price' => '150',
    'master' => 'Nick',
  ],

  [
    'name' => 'Квадрат',
    'price' => '799',
    'master' => 'Black',
  ],

];
```