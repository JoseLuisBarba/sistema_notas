<?php 

    function setActivo($ruta) {
        return request()->routeIs($ruta) ? 'activo' : '';
    }

    function minimo(): float {
        return 10.5;
    }
    function calcular_promedio(array $notas): float
    {
        $totalNotas = count($notas);
        if ($totalNotas === 0) {
            return 0;
        }

        $sumaNotas = array_sum($notas);
        return round($sumaNotas / $totalNotas, 2); 
    }

    function esta_aprobado(float $promedio): string
    {
        return $promedio >= minimo() ? 'Aprobado' : 'Desaprobado';
    }