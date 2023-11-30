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
//-------------------------
$nameUser2=$_POST['nameUser2'];
$lastName2=$_POST['lastName2'];
if($nameUser2=="" or $lastName2==""){
    echo"Campos vacios";
}else{
    echo($nameUser2);
    echo('<br/>');
    echo($lastName2);
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="get">
        Nombre:
        <input type ="text" name ="nameUser" id="name">
        <br/>
        Apellido:
        <input type ="text" name ="lastName" id="apellido">
        <br/>
        <input type ="submit" value ="Enviar">


    </form>

    <form action="ejercicio2.php" method="post">
        Nombre:
        <input type ="text" name ="nameUser2" id="name">
        <br/>
        Apellido:
        <input type ="text" name ="lastName2" id="apellido">
        <br/>
        <input type ="submit" value ="Enviar">


    </form>
    
</body>
</html>