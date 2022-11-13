<?php

   function clear_data($value)
   {
      $value = trim($value);
      $value = stripcslashes($value);
      $value = strip_tags($value);
      $value = htmlspecialchars($value);
      return($value);
   }

   $login = clear_data($_POST['login']);
   $password = clear_data($_POST['password']);
   $confirm_password = clear_data($_POST['confirm_password']);
   $email = clear_data($_POST['email']);
   $name = clear_data($_POST['name']);

   $pattern_pass = '/^[А-ЯЁ][а-яё]*$/';
   $error = [];
   $flag = 0;

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(preg_match($pattern_pass,$password))
      {
         $error ['password'] = '<small class="text-error">Пароль должен состоять из букв и цифр</small>';
         $flag = 1;
      }
      if (mb_strlen($password) > 10 || empty($password)){
         $err['password'] = '<small class="text-danger">Имя должно быть не больше 10 символов</small>';
         $flag = 1;
      }
   }


?>