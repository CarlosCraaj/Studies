<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title><?php echo isset($this->tituloPagina) ? \Config\SiteInfo::$nome." | ".$this->tituloPagina : \Config\SiteInfo::$nome; ?></title>
    </head>
    <body>