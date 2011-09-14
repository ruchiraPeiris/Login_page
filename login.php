<?php

$uname = $_POST["username"];

$upwd  = $_POST["userpassword"];


$link  = mysql_connect("localhost","root","rootpassword")or die(mysql_error());
echo "databases connected!";

mysql_select_db("db_name")or die(mysql_error());
echo "database selected!";

$query  = mysql_query(SELECT * FROM table_name);

$result = fetch_array($query);


while($result)
   {
     if($uname ="col-uname" && $upwd ="col-password")
             {
               echo "Login Sucsess !";
             }
    else
             {
               echo "plz enter user name and password  correct!"
             }
   }
?>