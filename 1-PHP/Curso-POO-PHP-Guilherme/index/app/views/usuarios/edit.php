<?php $this->tituloPagina = "Editar Usuários" ?>

<?php $this->layout('layout.topo'); ?>
    <h2>Editar</h2>

    <form action="/usuarios/<?php echo $this->modelo->id ?>" method="post">
        <input type="hidden" name="_METHOD" value="put">
        <input type="text" name="nome" placeholder="Nome" value="<?php echo $this->modelo->nome ?>">
        <input type="email" name="email" placeholder="E-mail" value="<?php echo $this->modelo->email ?>">
        <input type="password" name="senha" placeholder="Senha">
        <button>Atualizar</button>
    </form>

<?php $this->layout('layout.rodape'); ?>