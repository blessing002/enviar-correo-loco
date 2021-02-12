<?php 
$nombre=$ _POST[ "nombre"]; 
$apellidos=$ _POST[ "apellidos"]; 
$correo=$ _POST[
"correo"]; $mensaje=$ _POST[ "mensaje"]; 
$destinatario="Contacto.Trabajo.002@gmail.com"
; $asunto="contacto de floramics" 
; $carta="de: $nombre \n" ; $carta .="Correo: $correo \n"
; $carta .="telefono: $telefono" ; $carta .="mensaje: $mensaje" ; 
mail($destinatario, $asunto, $carta); ?>