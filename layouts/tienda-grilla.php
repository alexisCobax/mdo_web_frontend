<?php

include __DIR__ . '/../helpers/PaginadorHelper.php';

use app\helpers\ApiHelper;

use app\helpers\PaginadorHelper;


$resultadosPorPagina = 16;
$paginaActual = 1;
$idMarca = "";
$grupo = "";
$buscador = "";

if (isset($_GET['cantidad'])) {
    $resultadosPorPagina = $_REQUEST['cantidad'];
};
if (isset($_GET['pagina'])) {
    $paginaActual = $_REQUEST['pagina'];
};
if (isset($_GET['idMarca'])) {
    $idMarca = $_REQUEST['idMarca'];
};

if (isset($_GET['grupo'])) {
    $idGrupo = $_REQUEST['grupo'];
};

if (isset($_GET['buscador'])) {
    $buscador = $_REQUEST['buscador'];
};

$api = new ApiHelper;

if ($_GET['grupo']) {
    $producto = $api->get($url . '/api/web/producto?cantidad=' . $resultadosPorPagina . '&pagina=' . $paginaActual . '&grupo=' . $idGrupo . '&buscador=' . $buscador);
} else {
    $producto = $api->get($url . '/api/web/producto?cantidad=' . $resultadosPorPagina . '&pagina=' . $paginaActual . '&idmarca=' . $idMarca . '&buscador=' . $buscador);
}


//print_r($producto);
$producto = json_encode($producto);


$paginaActual = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1;

$paginator = new PaginadorHelper($producto, $resultadosPorPagina);
//echo "REGISTROS:".$paginator->getTotalPages();
$paginatedResults = $paginator->getPaginatedResults($paginaActual);

if ($paginatedResults) {

    foreach ($paginatedResults as $resultado) { ?>
        <div class="col-4">
            <div class="product-card card">
                <div class="product-img-action-wrap card-img-top">
                    <div class="product-img product-img-zoom">
                        <div class="product-img-inner">
                            <a href="producto.php?id=<?= $resultado['id']; ?>">
                                <img class="hover-img px-4" src="<?= $URLimagen . $resultado['imagenPrincipal']; ?>" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="card-body position-relative">
                        <h4 class="mt-1">
                            <a href="producto.php?id=<?= $resultado['id']; ?>"><?= $resultado['nombre']; ?></a>
                        </h4>
                        <div class="product-category">
                            <a href="producto.php?id=<?= $resultado['id']; ?>"><?= $resultado['nombreMarca']; ?></a>
                            <div class="product-category">
                                <div><?= $resultado['codigo']; ?></div>
                            </div>
                        </div>
                        <?= isset($_COOKIE['token'])
                            ? '<div class="product-price mt-1">
                                <span class="fs-5">U$S ' . $resultado['precio'] . '</span>' .
                            ($resultado['precioPromocional']
                                ? '<span class="old-price" style="text-decoration: line-through">U$S ' . $resultado['precioLista'] . '</span>'
                                : '') .
                            '</div>'
                            : '' ?>

                        <div class="mt-2 product-cart">
                            <a aria-label="Buy now" class="action-btn" href="#" onclick="agregarProducto(<?= $resultado['id']; ?>,<?= $resultado['precioPromocional'] ?>)">
                                <i class="fi-rs-shopping-bag-add btn btn-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    $totalPaginas = $paginator->getTotalPages();

    ?>

    <div class="pagination-area mt-15 mb-sm-5 mb-lg-0" id="pagination-area">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-start">
                <li class="page-item">
                    <a id="previous-page" class="page-link" href="#"><i class="fi-rs-angle-double-small-left"></i></a>
                </li>
                <?php for ($i = 1; $i <= $totalPaginas; $i++) { ?>
                    <li class="page-item active">
                        <a class="page-link" href="#"><?= $i; ?></a>
                    </li>
                <?php } ?>
                <li class="page-item">
                    <a id="next-page" class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a>
                </li>

            </ul>
        </nav>
    </div>

<?php } else { ?>
    <div class="col-4">
        <h5>No existen productos para esta marca.</h5>
    </div>

<?php } ?>