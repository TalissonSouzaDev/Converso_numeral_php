<?php
interface ConvertInterface {
    public static function RomanoToInteiro(string $romanNumeral): int;
    public static function  InteiroToRomano(int $realNumber): string;
}