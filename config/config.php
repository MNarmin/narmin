<?php
$dblocation='localhost';
$dbname='narmin';
$dbusr='root';
$dbpass='';
$dbport=3305;

$dbcon=	mysqli_connect ($dblocation,
						$dbusr,
						$dbpass,
						$dbname,
						$dbport);
if(!$dbcon){
exit('error connect');
}