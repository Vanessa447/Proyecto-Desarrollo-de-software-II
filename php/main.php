<?php

#Sintasis de PHP
#Tipos de variables
#Entero
$entero = 10;

#Flotantes o Reales
$decimal = 10.5;

#Cadenas
$cadena = "Hola mundo"

#Booleanos 
$verdadero = true;
$falso = false;

#ciclos
#ciclo for 
for ($i= 0; $i < 10; $i++) {
    echo $i . "<br>"; #Para concatenar utilizo punto
}
#ciclos 
#ciclo while 
$i = 0;
while ($i < 10){
    echo $i . "<br>"; 
    $i++
}

#ciclo do while 
$i = 0;
do {
    print $i ."<br>";
    $i++
}while ($i < 10);

#Estructuras de control 
if($verdadero)
{
    echo "verdadero";
} else {
    echo"falso";
}
# if aninado

if($verdadero){
        if($also){
            echo "verdadero":
        }else{
            echo "falso";
        }
}else{
    echo "falso";
}

#funciones
function suma ($a, $b){
    return $a + $b;
}

#Arrays
$array = array(1,2,3,4,5,6,7,8,9,10);
#arrays de texto
$array = array("uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez");





?>