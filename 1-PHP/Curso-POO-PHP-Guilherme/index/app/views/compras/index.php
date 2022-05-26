<?php $this->tituloPagina = "Home" ?>

<?php $this->layout('layout.topo'); ?>
        <h2>Essa é a página principal</h2>
        <p>Lista de Compras</p>
        <?php foreach ($this->compras as $key => $value): ?>
            <li><?php echo $value['titulo'] ?> - <?php echo $value['desc'] ?></li>
        <?php endforeach ?>

    <?php $this->layout('layout.rodape'); ?>