<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Slim\\' => array($vendorDir . '/slim/slim/Slim'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-message/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'Helpers\\' => array($baseDir . '/Helpers'),
    'FastRoute\\' => array($vendorDir . '/nikic/fast-route/src'),
    'Config\\' => array($baseDir . '/config'),
    'Composer\\Installers\\' => array($vendorDir . '/composer/installers/src/Composer/Installers'),
    'App\\' => array($baseDir . '/app'),
);
