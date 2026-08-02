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
    

    echo "\n"; 
    echo "Bloque 5, Ejercicio 3\n";

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
    echo "Bloque 5, Ejercicio 4\n";

    $tieneboleto = true;
    $adultez = 18;
    $edad = 17;
    $acompañante = true;


    if ($edad >= $adultez && $tieneboleto){
        echo"Mayor de 18 y tiene entrada \n";
    }elseif ($edad < $adultez && $acompañante){
        echo "Menor que 18 pero tiene acompañante \n";
    }else  echo"no puede ingresar \n";


    echo "\n"; 
    echo "Bloque 6, Ejercicio 1\n";

    $edad = 11;
    $precioentrada = 100;

    if ($edad < 12){
        echo"precio a pagar: ". "$". ($precioentrada * 0.5)."\n";
    }else {
        echo "precio a pagar: " . $precioentrada . "\n";
    }

    echo "\n"; 
    echo "Bloque 6, Ejercicio 2\n";

    $preciouni = 138;
    $cantidadcomp = 35;
    $subtotal = $preciouni * $cantidadcomp;
    $total = $subtotal * 0.9;
    $descuento = $subtotal - $total;

    if ($cantidadcomp >= 5) {
        echo "Subtotal: $" . $subtotal . "\n";
        echo "Descuento: $" . $descuento . "\n";
        echo "Total: $" . $total . "\n";
    } else{
        echo "Total: $" . $subtotal . "\n";
    }







    echo "\n";
    echo "Bloque 6, Ejercicio 3\n";

    $totalCompra = 3500;

    if ($totalCompra < 1000) {
        $descuento = 0;
    } elseif ($totalCompra >= 1000 && $totalCompra < 5000) {
        $descuento = $totalCompra * 0.10;
    } else {
        $descuento = $totalCompra * 0.20;
    }

    $totalFinal = $totalCompra - $descuento;

    echo "Total original: $" . $totalCompra . "\n";
    echo "Descuento: $" . $descuento . "\n";
    echo "Total final: $" . $totalFinal . "\n";





    echo "\n";
    echo "Bloque 6, Ejercicio 4\n";

    $producto = "Teclado";
    $precio = 250;
    $stock = 20;
    $cantidadSolicitada = 12;

    if ($cantidadSolicitada <= $stock) {

        $subtotal = $precio * $cantidadSolicitada;

        if ($cantidadSolicitada >= 10) {
            $descuento = $subtotal * 0.15;
        } else {
            $descuento = 0;
        }

        $total = $subtotal - $descuento;

        echo "Producto: " . $producto . "\n";
        echo "Subtotal: $" . $subtotal . "\n";
        echo "Descuento: $" . $descuento . "\n";
        echo "Total: $" . $total . "\n";

    } else {
        echo "Error: no hay suficiente stock.\n";
    }



    echo "\n";
    echo "Bloque 7, Ejercicio 1\n";

    for ($i = 1; $i <= 10; $i++) {
        echo $i . "\n";
    }




    echo "\n";
    echo "Bloque 7, Ejercicio 2\n";

    for ($i = 10; $i >= 1; $i--) {
        echo $i . "\n";
        if($i == 10){
            echo "Comenzemos!";
        }
    }
    
    echo "\n";
    echo "Bloque 7, Ejercicio 3\n";

    for ($i = 1; $i <= 20; $i++) {

        if($i % 2 === 0){
            echo $i . "\n";
        }
        
    }



    echo "\n";
    echo "Bloque 7, Ejercicio 4\n";

    $tabla = 5;

    for ($i = 1; $i <= 10; $i++) {
        echo $tabla . " X " . $i  . " = " . ($tabla * $i) . "\n";
    }
    

    echo "\n";
    echo "Bloque 8, Ejercicio 1\n";
    
    $num = 0;

    for ($i = 1; $i <= 10; $i++) {
        $num += $i;
        
    }
    echo"resultado: " . $num . "\n";



    echo "\n";
    echo "Bloque 8, Ejercicio 2\n";

    $num1 = 0;

    for ($i = 1; $i <= 100; $i++) {
        $num1 += $i;
        
    }
    echo"resultado: " . $num1 . "\n";



    echo "\n";
    echo "Bloque 8, Ejercicio 3 ". "\n";

    $num3 = 0;

    for ($i = 1; $i <= 50; $i++) {

        if($i % 2 === 0){
            $num3++;        
        }
  
    }

    echo $num3 . "total". "\n";




    echo "\n";
    echo "Bloque 8, Ejercicio 4 ". "\n";

    $num4 = 0;

    for ($i = 1; $i <= 100; $i++) {

        if($i % 3 === 0){
            $num4+= $i;        
        }
  
    }

    echo $num4 . "total". "\n";



    echo "\n";
    echo "Bloque 9, Ejercicio 1 ". "\n";


    $i = 0;
    while ($i<10){
        $i++;
        echo $i . "\n";
    }

    echo "\n";
    echo "Bloque 9, Ejercicio 2 ". "\n";

    $i = 2;
    while ($i<=20){

    if($i % 2 === 0){
        echo $i . "\n";
    }
        $i++;
        
    }


    echo "\n";
    echo "Bloque 9, Ejercicio 3 ". "\n";

    $i = 1;

    while ($i<100){
        echo $i . " \n";
        $i*=2;
        
    }



    echo "\n";
    echo "Bloque 9, Ejercicio 4 ". "\n";

    $ahorros=0;
    $meses=0;
    while ($ahorros < 5000){
    $meses++;
    echo "Mes " . $meses . "\n";
    $ahorros += 500;
    echo "Ahorros: ".$ahorros."\n";

    }

    echo "\n";
    echo "Bloque 10, Ejercicio 1 ". "\n";

    function saludar(){
        echo "Bienvenido al sistema \n";
    };

    saludar();
    saludar();


    echo "\n";
    echo "Bloque 10, Ejercicio 2 ". "\n";


    function saludarUsuario($nombre){
        echo "Hola, " . $nombre . "\n";
    }


    saludarUsuario("Thiago");
    saludarUsuario("Lucas");
    


    echo "\n";
    echo "Bloque 10, Ejercicio 3 ". "\n";

    $Total=0;
    function Sumar($num1, $num2){
        $Total = ($num1 + $num2);
        echo $Total . "\n";
    }
    Sumar(1837, 7320);



    echo "\n";
    echo "Bloque 10, Ejercicio 4 ". "\n";

    $Total = 0;
    function calcularTotal($precio, $cantidad){

        $Total = ($precio * $cantidad); 
        echo"Total: ".$Total . "\n";  
    }

    calcularTotal(2987, 79982);


    
    echo "\n";
    echo "Bloque 11, Ejercicio 1 ". "\n";


    function esMayorDeEdad($edad){
         if ($edad >= 18) {
            return true;
        } else {
            return false;
        }
    }

    var_dump(esMayorDeEdad(20));
    var_dump(esMayorDeEdad(15));





    echo "\n";
    echo "Bloque 11, Ejercicio 2 ". "\n";
    
    function esPar($numero){
        if ($numero % 2 === 0){
            return true;
        }else{ return false ;}
    }

    var_dump(esPar(35));
    var_dump(esPar(20));



    echo "\n";
    echo "Bloque 11, Ejercicio 3 ". "\n";

    function aplicarDescuento($precio, $porcentaje){
        $descuento = ($porcentaje / 100); 
        $precioFinal = $precio - ($precio * $descuento);
        echo"Total:" . $precioFinal . "\n";
    }

    aplicarDescuento(1000, 50);
    


    echo "\n";
    echo "Bloque 11, Ejercicio 4 ". "\n";

    function Aprueba($promedio){
        if($promedio >= 5 ){
            echo "Aprobado\n";
        }else echo"No Aprobado\n";
    }

    function calcularPromedio($not1, $not2, $not3){
        $promedio = (($not1 + $not2 + $not3 ) / 3);
        echo "Promedio: " . $promedio . "\n";  
        Aprueba($promedio);
    }
    calcularPromedio(2,4,8);




    echo "\n";
    echo "Bloque 12, Ejercicio 1 ". "\n";

    $Nombres = ["Thiago", "Luca", "Ariana", "Nicolas", "Matias"];

    echo $Nombres[0]. "\n";
    echo $Nombres[1]. "\n";
    echo $Nombres[2]. "\n";
    echo $Nombres[3]. "\n";
    echo $Nombres[4] . "\n";





    echo "\n";
    echo "Bloque 12, Ejercicio 2 \n";

    for ($i = 0; $i < count($Nombres); $i++) {
        echo $Nombres[$i]. "\n";
    }

    foreach($Nombres as $i){
        echo $i . "\n";
    }



    echo "\n";
    echo "Bloque 12, Ejercicio 3 \n";


    $Precios = [9812,390270,837290,98237,9723];

    foreach($Precios as $i){
        echo "$".$i . "\n";
    }
    echo "Precios: ".count($Precios). "\n";




    echo "\n";
    echo "Bloque 12, Ejercicio 4 \n";

    $contador =0;
    for ($i = 0; $i < count($Precios); $i++) {
        $contador += $Precios[$i];
    }

    echo $contador . "\n";

    echo array_sum($Precios) . "\n";





    echo "\n";
    echo "Bloque 13, Ejercicio 1 \n";


    $Numeros1 = [1,2,3,4,5,6,7,8,9];

    foreach($Numeros1 as $i){
        
        if($i % 2 == 0){
            echo $i. "\n";
        }
    }


    echo "\n";
    echo "Bloque 13, Ejercicio 2 \n";


    foreach($Numeros1 as $i){
        
        if($i >= 5){
            echo "Aprovado \n";
        }else echo "No Aprobado \n";
    }





    echo "\n";
    echo "Bloque 13, Ejercicio 3 \n";


    $nombres = ["Ana", "Juan", "Pedro", "María", "Luis"];

    $buscar = "Pedro";

    $encontrado = false;

    foreach ($nombres as $nombre) {
        if ($nombre == $buscar) {
            $encontrado = true;
            break;
        }
    }

    if ($encontrado) {
        echo "El nombre fue encontrado";
    } else {
        echo "El nombre no existe";
    }





?> 
