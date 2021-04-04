<?php

$db = mysqli_connect("localhost", "root", "", "app");

if (!$db) {
    echo 'Conexión fallida';
} else {
    echo 'Conexión correcta';
}
