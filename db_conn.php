<?php 

# server name
$sName = "localhost";
# user name
$uName = "melini.gounder@gmail.com";
# password
$pass = "admin@123!";

# database name
$db_name = "online_book_store";

/*
creating database connection 
useing The PHP Data Objects (PDO)
*/
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}


