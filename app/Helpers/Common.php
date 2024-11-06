<?php 

namespace app\Helpers;

class Common
{
    public static function Rupiah($number)
    {
        return 'Rp ' . number_format($number, 2, '.', ',');
    }

}
