<?php
    // funciones para la clave
    function obtener_iniciales($c) {
        $c = strtoupper($c); 
        return substr($c, 0, 3); 
    }
    function obtener_año($f) {
        return substr($f, 2, 2);
    }
    function obtener_mesdia($f) {
        $f = str_replace('-', '', $f);
        return substr($f, 4, 4);
    }
    function generar_clave($c, $f) {
        return obtener_iniciales($c). obtener_año($f). obtener_mesdia($f);
    }

    // funciones para usuario
    function limpiar_nombre($n) {
        $n=str_replace(' ', '', $n);
        return $n; 
    }
    function convertir_minusculas($n) {
        return strtolower($n); 
    }
    function obtener_institucion($i) {
        $i=strtolower($i);
        return substr($i, 0, 2);
    }
    function generar_usuario($n, $i, $f) {
        return convertir_minusculas(limpiar_nombre($n)). obtener_año($f). obtener_institucion($i);  
    }
?>