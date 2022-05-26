<?php $this->tituloPagina = "Adicionar Compras" ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Adicionar</h2>

    <form action="/compras" method="post">
        <input type="text" name="titulo" placeholder="Título">
        <input type="text" name="desc" placeholder="Descrição">
        <button>Adicionar</button>
    </form>

<?php $this->layout('layout.rodape'); ?>