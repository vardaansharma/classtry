<?php
	echo "hello";
$dsn = "pgsql:"
    . "host=ec2-79-125-5-199.eu-west-1.compute.amazonaws.com;"
    . "dbname=d3f5n2850gvvdk;"
    . "user=dguqsrqlvkwikg;"
    . "port=5432;"
    . "password=0df6d6a666c589ea364a2338859ec8ea352874effba3fdfcf8b1bbe69966ee20";

$db = new PDO($dsn);

$table = "tcompany";
try {
     $sql ="CREATE table $table(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     Prename VARCHAR( 50 ) NOT NULL, 
     Name VARCHAR( 250 ) NOT NULL,
     StreetA VARCHAR( 150 ) NOT NULL, 
     StreetB VARCHAR( 150 ) NOT NULL, 
     StreetC VARCHAR( 150 ) NOT NULL, 
     County VARCHAR( 100 ) NOT NULL,
     Postcode VARCHAR( 50 ) NOT NULL,
     Country VARCHAR( 50 ) NOT NULL);" ;
     $db->exec($sql);
   
} catch(PDOException $e) {
    echo $e->getMessage();//Remove or change message in production code
}

echo " we";



?>