MIGRACION: la migracion en laravel es una herramienta que facilita el control de las bases de 
datos, es decir se adapta a cualquier lenguaje SQL, sin necesidad de cambiar su sitaxis.
SINTAXIS: para ejecutar migracion se ejcuta php artisan make:model prueva -mcr

BLADE: Blade en laravel son las plantillas donde se dirige el controlador para visualizar las vistas
SINTAXIS:




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>salario</title>
    <form class"" action="salario.blade.php" method ="post">
    <input class="form-control" type="num" name="salari" placeholder=" digite su salario: ">
    <button>calcular<button>


    //
    <?php
    if($_POST){
        $salario=$_POST['salari']; 
        $resultadoo = ($salario/2);
        echo "$resultado";
    }
    ?>


</head>
<body>
    
</body>
</html>