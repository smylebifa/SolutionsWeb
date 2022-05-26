<?php


$url = 'https://samoilovilia.amocrm.ru/api/v4/leads';

$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

curl_setopt($ch, CURLOPT_URL, $url);

$response = curl_exec($ch);


$data = json_decode($response, true);


curl_close($ch);

echo '<pre>';

print_r($data);



$j = @file_get_contents('http://localhost/amo/leads.json');
$data = json_decode($j, true);


// echo '<pre>';

// print_r($data);

$leads = $data['_embedded']['leads'];

// print_r($leads);

// echo '<br>';


// $leads_together = implode(", ", $leads[0]);

$leadsFirst = $leads[0];

print_r($leadsFirst);


print_r($j);

$link = mysqli_connect("localhost", "root", "");


$json_ex = '{"screen": "50 inch", "resolution": "2048 x 1152 pixels", "ports": {"hdmi": 1, "usb": 3}, "speakers": {"left": "10 watt", "right": "10 watt"}}';

$sql = "INSERT INTO `store`.`leads`(`attributes`) VALUES ('$j') ;";

$result = mysqli_query($link, $sql);

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}

else {
    print("Запрос выполнился");
}


// '{"screen": "50 inch", "resolution": "2048 x 1152 pixels", "ports": {"hdmi": 1, "usb": 3}, "speakers": {"left": "10 watt", "right": "10 watt"}}'


// if( $j != false && !is_null($data)){
//     foreach($data as $k => $e){
//         echo '<p>'  . $e . '</p>';
//     }
// }

?>




