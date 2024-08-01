<?php
require_once("../model/Interfaces/ConvertInterface.php");

class Convert implements ConvertInterface
{

    public static  function RomanoToInteiro(string $romanNumeral): int
    {  
        $pattern = '/^[IVXLCDM]+$/';
        $validate = preg_match($pattern, $romanNumeral);

        if (!$validate) {
            return 0;
        }
        $romans = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $array_nume = strlen($romanNumeral) == 1 ? $romanNumeral :  str_split($romanNumeral);
        $result = 0;
        if (strlen($romanNumeral) <= 1) {
            $result = $romans[$array_nume];
        } else {
            for ($i = 0; $i < count($array_nume); $i++) {
                $currentValue = $romans[$array_nume[$i]];
                $nextValue = $i + 1 < count($array_nume) ? $romans[$array_nume[$i + 1]] : 0;
            
                if ($currentValue < $nextValue) {
                    $result -= $currentValue;
                } else {
                    $result += $currentValue;
                }
            }
        }

        return $result;
    }


    public static function InteiroToRomano(int $realNumber): string
    {
        $RomanToInt = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        ];

        $result = '';

        foreach ($RomanToInt as $roman => $value) {
            while ($realNumber >= $value) {
                $result .= $roman;
                $realNumber -= $value;
            }
        }

        return $result;
    }
}
