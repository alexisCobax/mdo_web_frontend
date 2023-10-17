<?php

namespace app\helpers;

class PaginadorHelper {
    private $results;
    private $totalRegistros;
    private $resultadosPorPagina;

    public function __construct($json, $resultadosPorPagina) {
        $data = json_decode($json, true);
        //print_r($data);
        $this->results = $data['data']['original']['results'];
        $this->totalRegistros = $data['data']['original']['total'];
        $this->resultadosPorPagina = $resultadosPorPagina;
        //echo $this->totalRegistros ;
    }

    public function getPaginatedResults($paginaActual) {
        $indiceInicio = ($paginaActual - 1) * $this->resultadosPorPagina;
        $indiceFin = $indiceInicio + $this->resultadosPorPagina - 1;
        $indiceFin = min($indiceFin, count($this->results) - 1);

        $resultadosPagina = array_slice($this->results, $indiceInicio, $this->resultadosPorPagina);

        return $resultadosPagina;
    }

    public function getTotalPages() {
       //echo "totalRegistros: ".$this->totalRegistros."<BR>";
        return ceil($this->totalRegistros / $this->resultadosPorPagina) ;
    }
}