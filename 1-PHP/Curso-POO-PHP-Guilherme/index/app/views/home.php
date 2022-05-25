<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Principal</title>
    </head>
    <body>
        <h2>Essa é a página principal</h2>
        <p>Lista de Compras</p>
        <?php foreach ($this->compras as $key => $value): ?>
            <li><?php echo $value['titulo'] ?> - <?php echo $value['desc'] ?></li>
        <?php endforeach ?>

    </body>
</html>