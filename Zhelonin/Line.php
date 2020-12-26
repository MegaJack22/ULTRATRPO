<?php

namespace Zhelonin;

Class Line
{
    public function solve($a, $b)
    {

        if ($a == 0) {
            throw new ZheloninException("Ошибка: уравнения не существует.");
        }
        MyLog::log("Определено, что это линейное уравнение");
        return $this->X = array(-($b / $a));
    }

    protected $X;
}

?>

