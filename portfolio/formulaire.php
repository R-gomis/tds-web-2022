<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $name = utf8_decode($_POST["name"]);
  $mail = ($_POST["mail"]);
  $msg = utf8_decode($_POST["msg"]);
  $headers = 'From :' .$nom.'<'.$mail.'>'."\r\n";
  $headers = 'Reply to: <'.$mail.'>'."\r\n";

  $to = 'r.gomis99@outlook.fr';
  mail ($to, $mail, $message, $headers);
}
?>