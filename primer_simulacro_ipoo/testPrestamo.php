<?php
include "Prestamo.php";
include "Person.php";


echo "Ingrese nombre cliente:\n" ;
$name = trim ( fgets ( STDIN )). "\n" ;

echo "Ingrese el apellido:\n" ;
$lastName = trim ( fgets ( STDIN )). "\n" ;

echo "Ingrese DNI:\n" ;
$dni = trim ( fgets ( STDIN )). "\n" ;

echo "Ingrese direccion:\n" ;
$direccion = trim ( fgets ( STDIN )). "\n" ;
echo "Ingrese mail@:\n" ;
$mail = trim ( fgets ( STDIN )). "\n" ;
echo "Ingrese Telefono:\n" ;
$phone = trim ( fgets ( STDIN )). "\n" ;
echo "Ingrese Neto:\n" ;
$neto = trim ( fgets ( STDIN )). "\n" ;
echo "/----------------------------------------/\n" ;

$objPersona= new Person($name,$lastName,$dni,$direccion,$mail,$phone,$neto);

$objPrestamo= new Prestamo(001,3457,"11/04/2022",50000,3,0.01,5,$objPersona);
echo $objPersona;
echo "/----------------------------------------/\n" ;
echo $objPrestamo;
echo "\n/----------------------------------------/\n" ;
echo $objPrestamo->calcularInteresPrestamo(3);
