<?php
  $uname = $_GET['uname'];
  $email = $_GET['email'];
  $password = $_GET['password'];
  $gender = $_GET['gender'];
  $lang = $_GET['lang'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    p {
      width: 100%;
      padding: 15px 10px;
      margin: 8px 0;
      display: inline-block;
      border: none;
      background-color: #4CAF50;
      border-radius: 4px;
      color: #f2f2f2;
      font-weight: bold;
      box-sizing: border-box;
      text-align: center;
    }

    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
  </style>
</head>

<body>
  <h3>입력하신 데이터입니다.</h3>
  <div>
    <p>이름: <?=$uname?> </p>
    <p>이메일: <?=$email?> </p>
    <p>비밀번호: <?=$password?></p>
    <p>성별: <?=$gender?></p>
    <p>선호하는 언어: <?=strtoupper($lang)?></p>
  </div>
</body>

</html>