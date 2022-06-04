<?php $this->tituloPagina = "Lista de Compras" ?>

<?php $this->layout('layout.topo'); ?>
        <h2>Lista de Detalhe</h2>

        <h3>Título: <?php echo $this->modelo->titulo; ?></h3>
        <p>Descrição: <?php echo $this->modelo->desc; ?></p>

<?php $this->layout('layout.rodape'); ?>