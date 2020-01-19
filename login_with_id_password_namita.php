<?php
$redirect = "";

if(isset($_POST['SUBMIT']))
{
    include "inc/db.php";
    $reg_date = date('Y-m-d');

    $error = array();
   
    if (empty($_POST['email']))
    {
        $error[] = 'Please Enter your Email ';
    }
    else
    {

        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) 
        {
         
            $email = $_POST['email'];
        } 
        else 
        {
             $error[] = 'Your Email Address is invalid  ';
        }
    }
  
    if(!empty($_POST['password']))
    {
         $password = validate($_POST['password']);
         $password = md5($password);
    }
    else 
    {
         $error[] = "Please check your Password";
    }
  
 
 