<?php $this->tituloPagina = "Lista de Compras" ?>

<?php $this->layout('layout.topo'); ?>
        <h2>Lista de Compras</h2>
        <a href="/compras/adicionar">Criar</a>
        <?php foreach ($this->compras as $key => $value): ?>
            <li><?php echo $value['titulo'] ?> - <?php echo $value['desc'] ?></li>
        <?php endforeach ?>

<?php $this->layout('layout.rodape'); ?>