<?php $this->tituloPagina = "Login" ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Entrar</h2>

    <form action="/login" method="post">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="senha" placeholder="Senha">
        <button>Entrar</button>
    </form>

<?php $this->layout('layout.rodape'); ?>