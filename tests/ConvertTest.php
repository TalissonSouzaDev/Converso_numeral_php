<?php
use PHPUnit\Framework\TestCase;
class ConvertTest extends TestCase {
    
     public function testRomanToInteiroFailed() {
         $input = "XCIXB";
         $expected = 0;
         $this->assertEquals($expected, Convert::RomanoToInteiro($input));
      }

     public function testRomanToInteiro() {
         $input = "XCIX";
         $expected = 99;
         $this->assertEquals($expected, Convert::RomanoToInteiro($input));
     }

     public function testInteiroToRoman() {
         $input = 21;
         $expected = "XXI";
         $this->assertEquals($expected, Convert::InteiroToRomano($input));
     }


}