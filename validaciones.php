<?php 

    function validarId($id){
        return is_numeric($id);
        // Validar que el ID recibido sea numerico
    }

    function validarNombre($nombre){
        return strlen($nombre)<20;
        // Validar que el nombre recibido tenga menos de 20 caracteres
    }

    function validarApellido($apellido){
        return strlen($apellido)<20;
        // Validar que el apellido recibido tenga menos de 20 caracteres
    }

    function validarTelefono($telefono){
        return (strlen($telefono)==9 && is_numeric($telefono));
        // Validar que el telefono recibido sea de 9 cifras
    }

    function validarDireccion($direccion){
        return strlen($direccion)<50;

        // Validar que la direccion recibida tenga menos de 50 caracteres
    }

    