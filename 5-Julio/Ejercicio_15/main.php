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

    echo "\n";
    echo "Bloque 13, Ejercicio 4 \n";

    $valores = [10, 20, 30, 40, 50];
    $mayor = 0;


    foreach ($valores as $valor) {
        if ($valor > $mayor) {
            $mayor = $valor;
        }
    }

    echo "El valor mayor es: " . $mayor . "\n";


    echo "\n";
    echo "Bloque 14, Ejercicio 1 \n";

    $suma =0;
    $cantidad = 0;
    $promedio = 0;
    
    foreach ($valores as $valor){
        $cantidad++;
        $suma += $valor;
        $promedio = $suma / $cantidad;
    }

    echo "Cantidad: ". $cantidad . "\n";
    echo "Total: ". $suma . "\n";
    echo "Promedio: ". $promedio . "\n";



    echo "\n";
    echo "Bloque 14, Ejercicio 2 \n";

    echo "Es lo mismo del bloque 13 ejercicio 2 \n";




    echo "\n";
    echo "Bloque 14, Ejercicio 3 \n";

    $promedio = 0;
    $suma =0;
    $cantidad = 0;
    $aprobados = 0;
    $desaprobados = 0;

    foreach ($Numeros1 as $notas){
        $cantidad++;
        echo $notas ."\n";

        $suma += $notas;
        $promedio = $suma / $cantidad;
        
        if($notas >= 5){
            $aprobados++;
        }else $desaprobados++;

    }

    echo "Aprobados: ".$aprobados . "\n";
    echo "Desaprobados: ".$desaprobados. "\n";
    echo "Promedio: " . $promedio . "\n";

    echo "\n";
    echo "Bloque 14, Ejercicio 4 \n";

    $promedio = 0;
    $suma =0;
    $cantidad = 0;
    $aprobados = 0;
    $desaprobados = 0;
    $mayor = 0;
    $menor = 2;

    $Numeros2 = [12, 7, 19, 4, 15, 8, 20, 3, 11, 6, 18, 9, 14, 2, 17];

    foreach($Numeros2 as $valores1){
        
        $cantidad++;
        echo "Numero: ". $valores1 . "\n";

        $suma += $valores1;

        $promedio = $suma / $cantidad;

        if($valores1 > $mayor){
            $mayor = $valores1;
        }

        if ($valores1 < $menor) {
            $menor = $valores1;
        }
    }

    echo "Cantidad: ". $cantidad . "\n";
    echo "Total: ". $suma . "\n";
    echo "Promedio: ". $promedio . "\n";
    echo "Mayor: " . $mayor . "\n";
    echo "Menor: " . $menor . "\n";



    echo "\n";
    echo "Bloque 15, Ejercicio 1 \n";

    $persona = [
        "nombre" => "Juan",
        "edad" => 25,
        "ciudad" => "Montevideo"
    ];


    echo "Me llamo ".$persona["nombre"]. ", tengo " . $persona["edad"]. ", y vivo en ". $persona["ciudad"]. "\n" ;





    echo "\n";
    echo "Bloque 15, Ejercicio 2 \n";


    $producto = [
        "nombre" => "Teclado",
        "precio" => 1200,
        "stock" => 5
    ];

    echo "Producto: " . $producto["nombre"] . "\n";
    echo "Precio: $" . $producto["precio"] . "\n";
    echo "Stock: " . $producto["stock"]. "\n";






    echo "\n";
    echo "Bloque 15, Ejercicio 3 \n";


    $producto = [
        "nombre" => "Teclado",
        "precio" => 1200,
        "stock" => 5
    ];

    $producto["precio"] = 2000;
    $producto["stock"] = 2;

    echo "Producto: " . $producto["nombre"] . "\n";
    echo "Precio: $" . $producto["precio"] . "\n";
    echo "Stock: " . $producto["stock"]. "\n";



    
    echo "\n";
    echo "Bloque 15, Ejercicio 4 \n";


    $producto = [
        "nombre" => "Teclado",
        "precio" => 1200,
        "stock" => 5
    ];

    $cantidadSolicitada = 3;

    if ($cantidadSolicitada <= $producto["stock"]) {

        $total = $producto["precio"] * $cantidadSolicitada;
        $producto["stock"] -= $cantidadSolicitada;

        echo "VENTA REALIZADA\n";
        echo "Producto: " . $producto["nombre"] . "\n";
        echo "Precio unitario: $" . $producto["precio"] . "\n";
        echo "Cantidad: " . $cantidadSolicitada . "\n";
        echo "Total: $" . $total . "\n";
        echo "Stock restante: " . $producto["stock"] . "\n";

    } else {

        echo "ERROR: No hay suficiente stock.\n";
    }








    echo "\n";
    echo "Bloque 16, Ejercicio 1 \n";

    $productos = [
        [
            "nombre" => "Teclado",
            "precio" => 1200
        ],
        [
            "nombre" => "Mouse",
            "precio" => 800
        ],
        [
            "nombre" => "Monitor",
            "precio" => 15000
        ]
    ];

    foreach ($productos as $producto) {
        echo "Producto: " . $producto["nombre"] . "\n";
        echo "Precio: $" . $producto["precio"] . "\n";
        echo "-------------------\n";
    }
    







    echo "\n";
    echo "Bloque 16, Ejercicio 2 \n";

    $productos = [
        [
            "nombre" => "Teclado",
            "precio" => 1200,
            "stock" => 5
        ],
        [
            "nombre" => "Mouse",
            "precio" => 800,
            "stock" => 0
        ],
        [
            "nombre" => "Monitor",
            "precio" => 15000,
            "stock" => 3
        ]
    ];

    foreach ($productos as $producto) {
        if ($producto["stock"] > 0) {
            echo "Producto: " . $producto["nombre"] . "\n";
            echo "Precio: $" . $producto["precio"] . "\n";
            echo "Stock: " . $producto["stock"] . "\n";
            echo "-------------------\n";
        }
    }


    echo "\n";
    echo "Bloque 16, Ejercicio 3 \n";

    foreach ($productos as $producto) {
        if ($producto["precio"] > 1000) {
            echo "Producto: " . $producto["nombre"] . "\n";
            echo "Precio: $" . $producto["precio"] . "\n";
            echo "Stock: " . $producto["stock"] . "\n";
            echo "-------------------\n";
        }
    }





    echo "\n";
    echo "Bloque 16, Ejercicio 4 \n";
    $total = 0;
    $totalxprod = 0;

    foreach ($productos as $producto) {
        
        $totalxprod = ($producto["precio"] * $producto["stock"]);
        $total += $totalxprod;

        echo "Producto: " . $producto["nombre"] . "\n";
        echo "Valor del stock: $" . $totalxprod . "\n";
        echo "-------------------\n";
    }

    echo "TOTAL: $". $total ."\n";



    echo "\n";
    echo "Bloque 17, Ejercicio 1 \n";


    $buscado = "Mouse";

    foreach ($productos as $producto) {
        if ($producto["nombre"] == $buscado) {
            echo "Producto: " . $producto["nombre"] . "\n";
            echo "Precio: $" . $producto["precio"] . "\n";
            echo "Stock: " . $producto["stock"] . "\n";
        }
    }

    echo "\n";
    echo "Bloque 17, Ejercicio 2 \n";

    $productos = [
        [
            "id" => 1,
            "nombre" => "Teclado",
            "precio" => 1200,
            "stock" => 5
        ],
        [
            "id" => 2,
            "nombre" => "Mouse",
            "precio" => 800,
            "stock" => 10
        ],
        [
            "id" => 3,
            "nombre" => "Monitor",
            "precio" => 15000,
            "stock" => 3
        ]
    ];

    $buscado = 3;

    foreach ($productos as $producto) {
        if ($producto["id"] == $buscado) {
            echo "Producto: " . $producto["nombre"] . "\n";
            echo "Precio: $" . $producto["precio"] . "\n";
            echo "Stock: " . $producto["stock"] . "\n";
        }
    }






    echo "\n";
    echo "Bloque 17, Ejercicio 3 \n";

    $mayor = $productos[0];

    foreach ($productos as $producto) {
        if ($producto["precio"] > $mayor["precio"]) {
            $mayor = $producto;
        }
    }

    echo "Producto más caro: " . $mayor["nombre"] . "\n";
    echo "Precio: $" . $mayor["precio"] . "\n";





    echo "\n";
    echo "Bloque 17, Ejercicio 4 \n";

    $buscado = 2;
    $encontrado = false;

    foreach ($productos as $producto) {
        if ($producto["id"] == $buscado) {
            echo "ID: " . $producto["id"] . "\n";
            echo "Nombre: " . $producto["nombre"] . "\n";
            echo "Precio: $" . $producto["precio"] . "\n";
            echo "Stock: " . $producto["stock"] . "\n";

            $encontrado = true;
        }
    }

    if ($encontrado == false) {
        echo "Producto no encontrado\n";
    }



    echo "\n";
    echo "Bloque 18, Ejercicio 1 \n";

    

    function sumarNumeros($array){
        $suma = 0; 
        foreach($array as $numero){
            $suma += $numero;
        }
        echo "Suma: " .$suma ."\n";
    }

    sumarNumeros($Numeros2);




    echo "\n";
    echo "Bloque 18, Ejercicio 2 \n";

    $notas = [4, 6, 8, 5, 10];

    function contarAprobados($notas) {
        $aprobados = 0;

        foreach ($notas as $nota) {
            if ($nota >= 6) {
                $aprobados++;
            }
        }

        return $aprobados;
    }

    echo "Aprobados: " . contarAprobados($notas) . "\n";

    echo "\n";
    echo "Bloque 18, Ejercicio 3 \n";


    function buscarProductoPorId($productos, $id){

        foreach($productos as $producto){
            if ($producto["id"] == $id) {
                echo "ID: " . $producto["id"] . "\n";
                echo "Nombre: " . $producto["nombre"] . "\n";
                echo "Precio: $" . $producto["precio"] . "\n";
                echo "Stock: " . $producto["stock"] . "\n";
            }
        }

    }
    

    buscarProductoPorId($productos, 2);



    echo "\n";
    echo "Bloque 18, Ejercicio 4 \n";

    function obtenerProductosConStock($productos) {
        $disponibles = [];

        foreach ($productos as $producto) {
            if ($producto["stock"] > 0) {
                $disponibles[] = $producto;
            }
        }

        return $disponibles;
    }

    $disponibles = obtenerProductosConStock($productos);

    foreach ($disponibles as $producto) {
        echo "Producto: " . $producto["nombre"] . "\n";
        echo "Precio: $" . $producto["precio"] . "\n";
        echo "Stock: " . $producto["stock"] . "\n";
        echo "-------------------\n";
    }






    echo "\n";
    echo "Bloque 19, Ejercicio 1 \n";


  

    $notas = [4, 7, 8, 5, 10, 6];

    function mostrarNotas($notas) {
        foreach ($notas as $nota) {
            echo "Nota: " . $nota . "\n";
        }
    }

    function calcularPromedio1($notas) {
        $suma = 0;

        foreach ($notas as $nota) {
            $suma += $nota;
        }

        return $suma / count($notas);
    }

    function notaMasAlta($notas) {
        $mayor = $notas[0];

        foreach ($notas as $nota) {
            if ($nota > $mayor) {
                $mayor = $nota;
            }
        }

        return $mayor;
    }

    function notaMasBaja($notas) {
        $menor = $notas[0];

        foreach ($notas as $nota) {
            if ($nota < $menor) {
                $menor = $nota;
            }
        }

        return $menor;
    }

    function contarAprobados1($notas) {
        $aprobados = 0;

        foreach ($notas as $nota) {
            if ($nota >= 6) {
                $aprobados++;
            }
        }

        return $aprobados;
    }
    function contarDesaprobados($notas) {
        $desaprobados = 0;

        foreach ($notas as $nota) {
            if ($nota < 6) {
                $desaprobados++;
            }
        }

        return $desaprobados;
    }


    echo "NOTAS\n";
    mostrarNotas($notas);

    echo "\n";
    echo "Promedio: " . calcularPromedio1($notas) . "\n";
    echo "Nota más alta: " . notaMasAlta($notas) . "\n";
    echo "Nota más baja: " . notaMasBaja($notas) . "\n";
    echo "Aprobados: " . contarAprobados1($notas) . "\n";
    echo "Desaprobados: " . contarDesaprobados($notas) . "\n";


    echo "\n";
    echo "Bloque 19, Ejercicio 2 \n";

    $inventario = [
        [
            "id" => 1,
            "nombre" => "Cámara",
            "precio" => 25000,
            "stock" => 4,
            "categoria" => "Fotografía"
        ],
        [
            "id" => 2,
            "nombre" => "Tablet",
            "precio" => 18000,
            "stock" => 0,
            "categoria" => "Tecnología"
        ],
        [
            "id" => 3,
            "nombre" => "Impresora",
            "precio" => 22000,
            "stock" => 3,
            "categoria" => "Oficina"
        ],
        [
            "id" => 4,
            "nombre" => "Disco externo",
            "precio" => 12000,
            "stock" => 7,
            "categoria" => "Almacenamiento"
        ]
    ];

    echo "TODOS LOS PRODUCTOS\n";

    foreach ($inventario as $producto) {
        echo "ID: " . $producto["id"] . "\n";
        echo "Nombre: " . $producto["nombre"] . "\n";
        echo "Precio: $" . $producto["precio"] . "\n";
        echo "Stock: " . $producto["stock"] . "\n";
        echo "Categoría: " . $producto["categoria"] . "\n";
        echo "-------------------\n";
    }


    echo "\nPRODUCTOS CON STOCK\n";

    foreach ($inventario as $producto) {
        if ($producto["stock"] > 0) {
            echo "Producto: " . $producto["nombre"] . "\n";
            echo "Stock: " . $producto["stock"] . "\n";
        }
    }

    $buscado = 3;
    $encontrado = false;

    foreach ($inventario as $producto) {
        if ($producto["id"] == $buscado) {
            echo "\nPRODUCTO ENCONTRADO\n";
            echo "Nombre: " . $producto["nombre"] . "\n";
            echo "Precio: $" . $producto["precio"] . "\n";
            echo "Stock: " . $producto["stock"] . "\n";
            echo "Categoría: " . $producto["categoria"] . "\n";

            $encontrado = true;
        }
    }

    if ($encontrado == false) {
        echo "\nProducto no encontrado\n";
    }

    $total = 0;

    foreach ($inventario as $producto) {
        $total += $producto["precio"] * $producto["stock"];
    }

    echo "\nVALOR TOTAL DEL INVENTARIO: $" . $total . "\n";

    $mayor = $inventario[0];

    foreach ($inventario as $producto) {
        if ($producto["precio"] > $mayor["precio"]) {
            $mayor = $producto;
        }
    }

    echo "\nPRODUCTO MÁS CARO\n";
    echo "Nombre: " . $mayor["nombre"] . "\n";
    echo "Precio: $" . $mayor["precio"] . "\n";
    





    echo "\n";
    echo "Bloque 19, Ejercicio 3 \n";


    $usuarios = [
        [
            "id" => 1,
            "nombre" => "Carlos Perez",
            "usuario" => "carlos",
            "contraseña" => "1234",
            "rol" => "admin",
            "activo" => true
        ],
        [
            "id" => 2,
            "nombre" => "Laura Gomez",
            "usuario" => "laura",
            "contraseña" => "5678",
            "rol" => "empleado",
            "activo" => true
        ],
        [
            "id" => 3,
            "nombre" => "Pedro Lopez",
            "usuario" => "pedro",
            "contraseña" => "abcd",
            "rol" => "empleado",
            "activo" => false
        ]
    ];

    $usuarioBuscado = "laura";
    $contraseñaIngresada = "5678";

    $encontrado = false;

    foreach ($usuarios as $usuario) {

        if ($usuario["usuario"] == $usuarioBuscado) {

            $encontrado = true;

            if ($usuario["contraseña"] != $contraseñaIngresada) {
                echo "Contraseña incorrecta\n";
            } 
            elseif ($usuario["activo"] == false) {
                echo "El usuario está inactivo\n";
            } 
            else {

                if ($usuario["rol"] == "admin") {
                    echo "Bienvenido administrador " . $usuario["nombre"] . "\n";
                } 
                elseif ($usuario["rol"] == "empleado") {
                    echo "Bienvenido empleado/a " . $usuario["nombre"] . "s\n";
                }
            }
        }
    }

    if ($encontrado == false) {
        echo "Usuario no encontrado\n";
    }


    echo "\n";
    echo "Bloque 19, Ejercicio 3 \n";


    $compras = [
        [
            "nombre" => "Auriculares",
            "precio" => 4500,
            "cantidad" => 2
        ],
        [
            "nombre" => "Webcam",
            "precio" => 6200,
            "cantidad" => 1
        ],
        [
            "nombre" => "Parlante",
            "precio" => 7500,
            "cantidad" => 3
        ]
    ];

    $subtotal = 0;
    $iva = 0.22;

    foreach ($compras as $compra){
        echo "Nombre: " . $compra["nombre"] . "\n";
        echo "Precio: $" . $compra["precio"] . "\n";
        echo "Cantidad: " . $compra["cantidad"] . "\n";
        echo "-------------------\n";

        $subtotal += $compra["precio"];
    }
    echo "\nSUBTOTAL\n";
    echo"$" . $subtotal . "\n";


    $valorIva = $subtotal * $iva;
    $total = $subtotal + $valorIva;

    echo "\nIVA (22%)\n";
    echo "$" . $valorIva . "\n";

    echo "\nTOTAL + IVA (22%)\n";
    echo "$" . $total . "\n";

    if ($total > 4000) {
        $descuento = $total * 0.10;
        $totalFinal = $total - $descuento;

        echo "\nDESCUENTO (10%)\n";
        echo "$" . $descuento . "\n";
    } else {
        $totalFinal = $total;
    }

    echo "\nTOTAL FINAL\n";
    echo "$" . $totalFinal . "\n";





?>

