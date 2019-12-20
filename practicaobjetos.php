<?php
   
   class persona{
       protected $nombre;
       protected $velocidad;
       public function __construct($pnombre, $pvelocidad)
       {
           $this->nombre = $pnombre;
           $this->velocidad = $pvelocidad;
       }
       public function getnombre(){
           return $this->nombre;
       }
       public function setnombre($pnombre){
           $this->nombre = $pnombre;
       }
   }
   class corredor extends persona{
       public function _construct($pnombre, $pvelocidad){
           $newnombre = 'corredor ' . $pnombre;
           $this->pnombre = $newnombre;
       }
   }

   $enrique = new corredor('ENRIQUE',10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>practica objetos</title>
</head>
<body>
    <section class="container">
    <h1> 
        FORMULARIO CONECTADO A UNA BASE DE DATOS
    </h1>

    <form>
        Nombre: <input type="text"> </br></br>
        Apellido: <input type="text"> </br> </br>
        Email: <input type="email">  </br></br>
        <button type="submit"> Aceptar </button>
    </form>
</section>
</body>
</html>