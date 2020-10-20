<?php


class FizzBuzz
{

    public function count(int $int):String
    {
        if($int === 3) return "Fizz";

        return strval($int);
    }
}