<?php

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

class Mail
{
  // Отправка письма.
  // Параметры - получатель, заголовок письма, тело письма.
  function Send(string $receiver, string $messageHeader, string $messageBody)
  {    
    if ($this->CheckSmtp())
    {
      $this->sendSmtp($receiver, $messageHeader, $messageBody);
    }
    else
    {
      $this->sendMail($receiver, $messageHeader, $messageBody);
    }

  }

  // Проверка доступности SMTP сервера
  private function CheckSmtp()
  {
    $host = "imap.yandex.com";
    $port = 993;

    $f = fsockopen($host, $port);

    if ($f !== false)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  // Отправка письма через SMTP сервер
  private function sendSmtp(string $receiver, string $messageHeader, string $messageBody)
  {
    $mail = new PHPMailer();

    try {

      $title = "Заголовок письма";
      $body = "Само письмо";

      $mail->isSMTP();   
      $mail->CharSet = "UTF-8";
      $mail->SMTPAuth   = true;
      $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'imap.yandex.com'; // SMTP сервера вашей почты
    $mail->Username   = 'ilia123samoilov@yandex.ru'; // Логин на почте
    $mail->Password   = 'azerbaijan123'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 993;
    $mail->setFrom('ilia123samoilov@yandex.ru', 'Илья Самойлов'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('ilia123samoilov@yandex.ru');  

// Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;    

// Проверяем отравленность сообщения
    if ($mail->send()) {$result = "success";} 
    else {$result = "error";}

  } catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
  }

// Отображение результата
  echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);

}

  // Отправка письма через функцию mail()
private function sendMail(string $receiver, string $messageHeader, string $messageBody)
{
 mail($receiver, "Subject Text", $messageBody, $messageHeader);
}

}

$headers = implode("\r\n", [
  "From: John Conde <webmaster@example.com>",
  "Reply-To: webmaster@example.com",
  "X-Mailer: PHP/" . PHP_VERSION,
  "MIME-Version: 1.0",
  "Content-Type: text/html; charset=UTF-8"
]);


$mail = new Mail();

$mail->Send("jane@contoso.com", $headers, "This is some message");

?>
