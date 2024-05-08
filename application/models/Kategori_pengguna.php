<?php

declare(strict_types=1);
namespace application\models;

/**
 * @author Agus Susilo <smartgdi@gmail.com>
 */
class Kategori_pengguna
{
    public const ADMIN = 1;
    public const SRV_PROVIDER = 2;
    public const ASSOCIATION = 3;
    public const SUPPLIER = 4;
    public const MARKETING = 5;


    public static function getNonAdmin()
    {
        return 4;
    }
}
