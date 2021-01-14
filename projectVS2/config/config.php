<?php
try{
    $dsn = 'mysql:host=localhost;dbname=cv';
    $db= new PDO($dsn, 'root', '');
}
catch(exception $e){
    echo $e;
    exit();
}

?>