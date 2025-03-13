<?php
ini_set("display_error",E_ALL);
include_once "Persona.php";
$lista = [
    new Persona("Adrian","2003-03-04","","037034907"),
    new Persona("Brando","2000-05-24","","972712039"),
    new Persona("Jesus","2004-08-15","","102870208"),
    new Persona("Magaly","2005-09-23","","12872070"),
    new Persona("Vanesa","2000-06-03","","12983974"),
    new Persona("Guillermo","2003-03-04","","74293297"),
    new Persona("Hugo","2002-10-19","","30709217"),
    new Persona("Alejandra","2002-02-08","","21093844"),
    new Persona("Erick","1990-08-21","","037034907"),
];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista Personas</title>
        <style>
            td {
                background-color:cyan;
            }
        </style>
    </head>
    <body>
    <h1>Lista de Personas</h1>
        <table border>
            <thead>   
            </thead>
                <tr>
                <th>Nombre </th>
                <th>Fecha de nacimiento</th>
                <th>edad</th>
                <th>Telefono</th>
                </tr>
            <tbody>
            <?php foreach($lista as $P): ?>
             <tr>
             <td><?php echo $P->getNombre()?></td>
             <td><?php echo $P->getFecNac()?></td>
             <td><?php echo $P->getEda()?></td>
             <td><?php echo $P->getTelefono()?></td>
             <?php endforeach?>
            </tbody>
        </table> 
    </body>
</html>