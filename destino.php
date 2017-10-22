<?php

if(!empty($_POST["nombre"])
    && !empty($_POST["apellidos"])
    && !empty($_POST["direccion"])) {

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $direccion = $_POST["direccion"];

    echo "Te llamas $nombre $apellidos y vives en $direccion";

} else
    echo "Faltan datos";