<?php

//Taller de Mejoramiento

/* 1.Hacer un programa en PHP que permita calcular el salario mensual de un empleado que cobra $35000 por hora 
y trabaja 40 horas a la semana, tenga en cuenta que se hace un descuento del 8% para seguridad social al 
sueldo base, a demás de una deducción de $250000 para una deuda que este tiene con una entidad bancaria. */

echo("Punto 1.");
echo("<br>");
echo("<br>");

$salarioMensual=0;
$salarioSemanal=0;
$gananciaXHora=35000;
$horaTrabajadas=40;
$descuento=0.08;
$deduccion=250000;
$sueldoTotal=0;


$salarioSemanal = $gananciaXHora * $horaTrabajadas;
$salarioMensual = ($gananciaXHora * $horaTrabajadas) * 4; 
$sueldoTotal = ($salarioMensual * $descuento) - $deduccion;

echo("Su salario semanal es de: ".$salarioSemanal.".");
echo("<br>");
echo("Su salario mensual es de: ".$salarioMensual.".");
echo("<br>");
echo("Su salario total con el descuento y las deducciones es de: ".$sueldoTotal.".");
echo("<br>");
echo("<br>");

/* El ministerio de salud necesita un programa en PHP que permita regular el riesgo de una persona a contraer 
coronavirus, para ello considera el número de contactos que la persona sostiene en un día guardando 
la relación:

- Número de Contactos <= 10 : Bajo Riesgo
- 10<Número de Contactos<=15: Riego Moderado
- Número de contactos >15: Riesgo alto */


echo("Punto 2.");
echo("<br>");
echo("<br>");

echo("Contacto 1: ");
$numeroContactos=10;

if($numeroContactos <= 10){
    echo("Esta en bajo riesgo.");
}
elseif($numeroContactos <= 15){
    echo("Esta en un riesgo moderado");
}
elseif($numeroContactos > 15){
    echo("Esta en un riesgo alto");
}


echo("<br>");
echo("Contacto 2: ");
$numeroContactos=25;

if($numeroContactos <= 10){
    echo("Esta en bajo riesgo.");
}
elseif($numeroContactos <= 15){
    echo("Esta en un riesgo moderado");
}
elseif($numeroContactos > 15){
    echo("Esta en un riesgo alto");
}

echo("<br>");
echo("Contacto 3: ");
$numeroContactos=45;

if($numeroContactos <= 10){
    echo("Esta en bajo riesgo.");
}
elseif($numeroContactos <= 15){
    echo("Esta en un riesgo moderado");
}
elseif($numeroContactos > 15){
    echo("Esta en un riesgo alto");
}
echo("<br>");
echo("Contacto 4: ");
$numeroContactos=70;

if($numeroContactos <= 10){
    echo("Esta en bajo riesgo.");
}
elseif($numeroContactos <= 15){
    echo("Esta en un riesgo moderado");
}
elseif($numeroContactos > 15){
    echo("Esta en un riesgo alto");
}

echo("<br>");
echo("Contacto 5: ");
$numeroContactos=150;

if($numeroContactos <= 10){
    echo("Esta en bajo riesgo.");
}
elseif($numeroContactos <= 15){
    echo("Esta en un riesgo moderado");
}
elseif($numeroContactos > 15){
    echo("Esta en un riesgo alto");
}

echo("<br>");
echo("Contacto 6: ");
$numeroContactos=5;

if($numeroContactos <= 10){
    echo("Esta en bajo riesgo.");
}
elseif($numeroContactos <= 15){
    echo("Esta en un riesgo moderado");
}
elseif($numeroContactos > 15){
    echo("Esta en un riesgo alto");
}

echo("<br>");
echo("Contacto 7: ");
$numeroContactos=6;

if($numeroContactos <= 10){
    echo("Esta en bajo riesgo.");
}
elseif($numeroContactos <= 15){
    echo("Esta en un riesgo moderado");
}
elseif($numeroContactos > 15){
    echo("Esta en un riesgo alto");
}

echo("<br>");
echo("Contacto 8: ");
$numeroContactos=12;

if($numeroContactos <= 10){
    echo("Esta en bajo riesgo.");
}
elseif($numeroContactos <= 15){
    echo("Esta en un riesgo moderado");
}
elseif($numeroContactos > 15){
    echo("Esta en un riesgo alto");
}

echo("<br>");
echo("Contacto 9: ");
$numeroContactos=89;

if($numeroContactos <= 10){
    echo("Esta en bajo riesgo.");
}
elseif($numeroContactos <= 15){
    echo("Esta en un riesgo moderado");
}
elseif($numeroContactos > 15){
    echo("Esta en un riesgo alto");
}

echo("<br>");
echo("Contacto 10: ");
$numeroContactos=74;

if($numeroContactos <= 10){
    echo("Esta en bajo riesgo.");
}
elseif($numeroContactos <= 15){
    echo("Esta en un riesgo moderado");
}
elseif($numeroContactos > 15){
    echo("Esta en un riesgo alto");
}
echo("<br>");
echo("<br>");


/* 3.Hacer un programa en PHP para la tienda D1 que permita almacenar en 3 arreglos asociativos 
(Enlatados, frutas, aseo) información de 5 productos de cada categoría. Muestre en pantalla toda la 
información almacenada en los 3 arreglos y asigne las claves que usted desee a cada elemento. */

echo("Punto 3.");
echo("<br>");
echo("<br>");

$enlatados=array('enlatado1'=>"Atun en agua",'enlatado2'=>"Atun en aceite",'enlatado3'=>"Atun con verduras",
                  'enlatado4'=>"Arbejas",'enlatado5'=>"Maicitos");
foreach($enlatados as $clave=>$valor){
    echo($clave.": ");
    echo($valor."<br>");
}
echo("<br>");

$frutas=array('fruta1'=>"Pera",'fruta2'=>"Papaya",'fruta3'=>"Sandia",
                  'fruta4'=>"Manzana",'fruta5'=>"Banano");
foreach($frutas as $clave=>$valor){
    echo($clave.": ");
    echo($valor."<br>");
}
echo("<br>");

$aseo=array('aseo1'=>"Escoba",'aseo2'=>"Trapero",'aseo3'=>"Recogedor",
                  'aseo4'=>"Limpia Vidrios",'aseo5'=>"Axion");
foreach($aseo as $clave=>$valor){
    echo($clave.": ");
    echo($valor."<br>");
}
echo("<br>");

/* 4. Definir y probar una función en PHP que permita calcular el área de los siguientes triángulos:
• Triangulo 1: Altura = 30cm Base=60cm
• Triangulo 2: Altura = 25cm Base=25cm */

echo("Punto 4.");
echo("<br>");
echo("<br>");

function calcularArea($altura, $base){
    $area = ($base * $altura) / 2;
    return $area;
}

$Triangulo1=calcularArea(30,60);
echo("El area del primer triangulo es: ".$Triangulo1);
echo("<br>");
$Triangulo2=calcularArea(25,25);
echo("El area del segundo triangulo es: ".$Triangulo2);
echo("<br>");
echo("<br>");

/* 5. Bancafé contrata sus servicios de desarrollador para realizar un programa en PHP que permita almacenar 
información de nombre, teléfono, dirección, email y salario de 5 usuarios de una sucursal llamada sucursal A. 
Utilice un arreglo multidimensional para almacenar esta información y preséntela en pantalla utilizando 
ciclos foreach. */

echo("Punto 5.");
echo("<br>");
echo("<br>");

$sucursalA=array(
    'usuario1'=>array('nombre'=>"daniel",'telefono'=>2692630,'direccion'=>"cesde",'email'=>"correo1",'salario'=>5000000),
    'usuario2'=>array('nombre'=>"esteban",'telefono'=>2708080,'direccion'=>"cesde",'email'=>"correo2",'salario'=>4000000),
    'usuario3'=>array('nombre'=>"juan",'telefono'=>2152020,'direccion'=>"cesde",'email'=>"correo3",'salario'=>3000000),
    'usuario4'=>array('nombre'=>"pablo",'telefono'=>2803493,'direccion'=>"cesde",'email'=>"correo4",'salario'=>10000000),
    'usuario5'=>array('nombre'=>"sonia",'telefono'=>2693026,'direccion'=>"cesde",'email'=>"correo5",'salario'=>30000000),
);

foreach($sucursalA as $claveUni=>$arregloUni){
    echo("<br>");
    print_r($arregloUni);
    echo("<br>");
    foreach($arregloUni as $clave=>$valor){
        echo($clave).": ".$valor;
        echo("<br>");
    }
}
?>