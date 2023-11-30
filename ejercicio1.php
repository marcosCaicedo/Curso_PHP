<?php 
$nameUser=$_GET['nameUser'];
$lastUser=$_GET['lastName'];
if($nameUser=="" || $lastUser==""){
   echo"datos vacios";
   echo('<br/>');
}else{
    echo($nameUser);
    echo('<br/>');
    echo($lastUser);
}

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1.php</title>
</head>
<body>
    <form action="#" method="get">
        Nombre:
        <input type ="text" name ="nameUser" id="name">
        <br/>
        Apellido:
        <input type ="text" name ="lastName" id="apellido">
        <br/>
        <input type ="submit" value ="Enviar">


    </form>


    
</body>
</html>