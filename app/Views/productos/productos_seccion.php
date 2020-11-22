<nav class="categorias_nav">
    <div class="categoria">
        <a href="/"><p>Todos</p></a>
    </div>
    <div class="categoria">
        <a href="/seccion/1"><p>Bicicletas</p></a>
    </div>
    <div class="categoria">
        <a href="/seccion/2"><p>Patinetes</p></a>
    </div>
    <div class="categoria">
        <a href="/seccion/3"><p>Servicios Alquiler</p></a>
    </div>
</nav>

<?php if (! empty($producto) && is_array($producto)) : ?>
    <div class="container_page">

        <?php foreach ($producto as $producto_item): ?>
            
        <a class="container_enlace" href="/productos/<?= esc($producto_item->ProductoId, 'url');?>">
            <div class="container_product" >
                <div class="product_img">
                <img src=<?=base_url("/img/". esc($producto_item->Imagen));?>>
                </div>
                <div class="valoracion">
                    <p class="puntuacion"><?= $valoracion->getPuntuacionMedia($producto_item->ProductoId);?></p>
                    <p class="votaciones"><?= $valoracion->getNumeroVotos($producto_item->ProductoId);?> valoraciones.</p>
                </div>
                <div class="descripcion">
                    <p><?=esc($producto_item->Descripcion); ?></p>
                </div>
                <div class="nombre">
                    <p><?= esc($producto_item->Nombre); ?></p>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
        
    </div>
<?php else : ?>

<h3>No hay Productos</h3>

<p>No podemos encontrar los productos</p>

<?php endif ?>

<script>

</script>