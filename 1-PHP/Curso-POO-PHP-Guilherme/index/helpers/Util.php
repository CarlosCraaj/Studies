<?php

namespace Helpers;
use Config\SiteInfo;

class Util
{
    public static function trataValor($valor)
    {
        return "R$ ".number_format($valor,2,',','.');
    }

    public static function asset($url)
    {
        return SiteInfo::$url.$url;
    }

}
