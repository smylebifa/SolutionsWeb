<?php

$url = 'https://samoilovilia.amocrm.ru/api/v4/leads';

$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_URL, $url);

$data = curl_exec($ch);

// $data = @file_get_contents('http://localhost/amo/leads.json');

$link = mysqli_connect("localhost", "root", "");

$sql = "INSERT INTO `store`.`leads`(`attributes`) VALUES ('$data') ;";

$result = mysqli_query($link, $sql);

if ($result == false) 
{
    print("Произошла ошибка при выполнении запроса");
}

else 
{
    print("Запрос выполнился");
}

curl_close($ch);

?>