<?php

$producto = $api->post($url.'/api/web/carrito/status', []);

if(isset($producto['data'])){

foreach ($producto['data']['detalles'] as $p) { ?>
    <tr>
      <td class="image product-thumbnail"><img src="https://mayoristasdeopticas.net/productos/<?= $p['producto']['imagen']; ?>.jpg" alt="#"></td>
      <td class="product-des product-name">
        <h5 class="product-name"><a href="producto.php?id=<?= $p['producto']['id']; ?>"><?= $p['producto']['nombre']; ?></a></h5>
        <p class="font-xs"><?= $p['producto']['marcaNombre']; ?> <br /><?= $p['producto']['tamano']; ?> | <?= $p['producto']['color']; ?>
        <input type="hidden" id="idProducto" value="<?= $p['producto']['id']; ?>" />
        </p>
      </td>
      <td class="price" data-title="Price" style="text-align:right"><span id="precio">U$S<?= number_format($p['producto']['precio'], 2, ',', '.'); ?> </span></td>
      <td class="" data-title="Stock" >
        <input type="number" class="form-control detail-qty border radius" min="1" max="100" step="1" value="<?= $p['cantidad']; ?>" onchange="actualizarProducto(this,<?= $p['producto']['id']; ?>)" id="cantidad"   />
      </td>
      <td class="text-right" data-title="Cart" style="text-align:right">
        <span id="subtotal" >U$S<?= number_format($p['subTotal'], 2, ',', '.'); ?> </span>
      </td>
      <td class="action" data-title="Remove"><a href="#" onclick="remove(<?= $p['id'] ?>,this);" class="text-muted"><i class="fi-rs-trash"></i></a></td>
    </tr>
  <?php } 
  
}
  ?>
