<?php $this->tituloPagina = "Adicionar Usuários" ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Adicionar</h2>

    <form action="/usuarios" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="senha" placeholder="Senha">
        <button>Adicionar</button>
    </form>

<?php $this->layout('layout.rodape'); ?>