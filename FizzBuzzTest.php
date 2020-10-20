<?php
require "vendor/autoload.php";
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_count_given1_shouldReturn1(){
        //Arrange
        $FizzBuzz = new FizzBuzz();

        //Act
        $actual = $FizzBuzz->count(1);

        //Assert
        $this->assertEquals("1",$actual);
    }

    public function test_count_given2_shouldReturn2(){
        $FizzBuzz = new FizzBuzz();

        $actual =$FizzBuzz->count(2);

        $this->assertEquals("2",$actual);
    }
}
