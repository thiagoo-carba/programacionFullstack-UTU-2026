 <?php

    echo "Bloque 1, Ejercicio 1\n";

    $nombre = "Ana";
    $edad = 17;
    $ciudad = "Libertad";

    echo "Hola, mi nombre es " . $nombre . ", tengo " . $edad . " años y vivo en " . $ciudad . ".\n";



    echo "\n"; 
    echo "Bloque 1, Ejercicio 2\n";

    $nombreprod = "Tesla Model Y";
    $precio = 36990;
    $stock = 200;

    echo "Producto: ". $nombreprod . "\n";
    echo "Precio: " . $precio . "\n";
    echo "Stock: " . $stock . "\n";

    
    echo "\n"; 
    echo "Bloque 1, Ejercicio 3\n";

    $playername = "Mateo";
    $charactername = "DragonX";
    $nivel = 25;
    $servidor = "Latinoamerica";

    echo "=== PERFIL DEL JUGADOR ===\n";
    echo $playername . "\n";
    echo "Personaje: " . $charactername . "\n" ;
    echo "💪: " . $nivel . "\n";
    echo "🌍: " . $servidor . "\n";
    echo "========================\n";

    echo "\n"; 
    echo "Bloque 1, Ejercicio 4\n";

    $nombre = "Lucía";
    $curso = "Tercero";
    $materia = "Programación";

    echo "Nombre: " . $nombre."\n";
    echo "Curso: " . $curso."\n";
    echo "Materia: " . $materia . "\n";

    echo "\n"; 
    echo "Bloque 2, Ejercicio 1\n";


    $A = 300;
    $B = 27;

    echo "Numeros seleccionados: A=300 y B=27 \n";
    echo "Suma: " . ($A + $B) . "\n";
    echo "Resta: " . ($A - $B) . "\n";
    echo "Multiplicacion: " . ($A * $B). "\n";
    echo "Division: " . ($A / $B) . "\n";


    echo "\n"; 
    echo "Bloque 2, Ejercicio 2\n";

    echo "Area de un rectangulo Largo 20cm y Ancho 5cm\n";
    $largo = 20;
    $ancho = 5;

    echo "Area: " . ($largo * $ancho) . "cm\n";


    echo "\n"; 
    echo "Bloque 2, Ejercicio 3\n";

    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 9;
    
    $promedio = (($nota1 + $nota2 + $nota3)/3);

    echo "Promedio: " . $promedio . "\n";


    echo "\n"; 
    echo "Bloque 2, Ejercicio 4\n";

    $minutos = 135;
    $horas = round($minutos / 60);
    $resto = ($minutos % 60);

    echo "tiempo: " . $horas. ",". $resto ." horas\n";


    echo "\n"; 
    echo "Bloque 3, Ejercicio 1\n";

    $numeroA = 23;
    $numeroB = 57;

    if($numeroA === $numeroB){
        echo "A y B son iguales \n";
    }else if($numeroA > $numeroB){
        echo "A es mayor que B\n";
    }else if ($numeroA < $numeroB){
        echo "B es mayor que A\n";
    }
       
    
    echo "\n"; 
    echo "Bloque 3, Ejercicio 2\n";

    $edad1 = 23;
    $mayoria = 18;

    if($edad1 === $mayoria){
        echo "Tenes 18 \n";
    }else if($edad1 > $mayoria){
        echo "Sos adulto\n";
    }else if ($edad1 < $mayoria){
        echo "Sos menor\n";
    }



    echo "\n"; 
    echo "Bloque 3, Ejercicio 3\n";

    $numero1 = 10;
    $texto = "10";

    if($numero1 === $texto){
        echo "si son mismo tipo\n";
    }else if($numero1 == $texto){
        echo "no son mismo tipo \n";
    }



    echo "\n"; 
    echo "Bloque 3, Ejercicio 4\n";

    $stock1 = 253;
    $pedido = 23;
    $precio = 2000;
    $presupuesto = 2100;

    $procedeacompra = true;

    if ($stock1 >= $pedido) {
        $procedeacompra = true;
        echo "Stock disponible, calculando presupuesto...\n";
    } else {
        $procedeacompra = false;
        echo "No alcanza el stock.\n";
    }

    if ($procedeacompra) {

        if ($presupuesto >= $precio) {
            echo "La compra puede realizarse.\n";
        } else {
            echo "El presupuesto no alcanza para realizar la compra.\n";
        }

    }



    echo "\n"; 
    echo "Bloque 4, Ejercicio 1\n";

    $puntuacion = 43;

    if($puntuacion >= 50 ){
        echo "Gano";
    }else{
        echo "Perdio";
    }



    echo "\n"; 
    echo "Bloque 4, Ejercicio 2\n";

    $numero2 = 20;
    if ($numero2 > 0) {
        echo "El número es positivo.\n";
    } elseif ($numero2 < 0) {
        echo "El número es negativo.\n";
    } else {
        echo "El número es cero.\n";
    }


    echo "\n"; 
    echo "Bloque 4, Ejercicio 3\n";

    $numero3 = 7;

    if ($numero3 % 2 == 0) {
        echo "El número es par.\n";
    } else {
        echo "El número es impar.\n";
    }



    echo "\n"; 
    echo "Bloque 4, Ejercicio 3\n";


    echo "\n"; 
    echo "Bloque 4, Ejercicio 4\n";

    $nota = 10;

    if ($nota < 1 || $nota > 12) {
        echo "Error: la nota debe estar entre 1 y 12.\n";
    } elseif ($nota < 6) {
        echo "Insuficiente.\n";
    } elseif ($nota >= 6 && $nota <= 8) {
        echo "Aprobado.\n";
    } elseif ($nota >= 9 && $nota <= 10) {
        echo "Muy bueno.\n";
    } elseif ($nota >= 11 && $nota <= 12) {
        echo "Excelente.\n";
    }

    echo "\n"; 
    echo "Bloque 5, Ejercicio 1\n";

    $usuario = "admin";
    $contraseña = "1234";

    if ($usuario == "admin" && $contraseña == "1234") {
        echo "Inicio de sesión correcto.\n";
    } else {
        echo "Usuario o contraseña incorrectos.\n";
    }


    echo "\n"; 
    echo "Bloque 5, Ejercicio 2\n";

    $rol = "docente";

    if ($rol == "administrador" || $rol == "docente") {
        echo "Acceso permitido.\n";
    } else {
        echo "Acceso denegado.\n";
    }





    
?> 