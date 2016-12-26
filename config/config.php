<?php
$dblocation='localhost';
$dbname='narmin';
$dbusr='root';
$dbpass='';
$dbport=3306;

$dbcon=	mysqli_connect ($dblocation,
						$dbusr,
						$dbpass,
						$dbname,
						$dbport);
if(!$dbcon){
exit('error connect');
}