<?php

namespace app\helpers;

class PaginadorHelper {
    private $results;
    private $resultadosPorPagina;

    public function __construct($json, $resultadosPorPagina) {
        $data = json_decode($json, true);
        $this->results = $data['data']['original']['results'];
        $this->resultadosPorPagina = $resultadosPorPagina;
    }

    public function getPaginatedResults($paginaActual) {
        $indiceInicio = ($paginaActual - 1) * $this->resultadosPorPagina;
        $indiceFin = $indiceInicio + $this->resultadosPorPagina - 1;
        $indiceFin = min($indiceFin, count($this->results) - 1);

        $resultadosPagina = array_slice($this->results, $indiceInicio, $this->resultadosPorPagina);

        return $resultadosPagina;
    }

    public function getTotalPages() {
        return ceil(count($this->results) / $this->resultadosPorPagina);
    }
}