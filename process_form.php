<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $subscribe = isset($_POST['subscribe']) ? $_POST['subscribe'] : 'no';
  $name = $_POST['name'];

  $to = "ttvoypesikk@gmail.com";
  $subject = "Данные формы";
  $message = "Подписка: " . $subscribe . "\nИмя: " . $name;
  $headers = "From: https://pesik321.github.io/html/";

  if (mail($to, $subject, $message, $headers)) {
    echo "Сообщение успешно отправлено.";
  } else {
    echo "Ошибка при отправке сообщения.";
  }
}
?>