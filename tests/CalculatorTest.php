<?php
use PHPUnit\Framework\TestCase;
require 'Calculadora.php';
class CalculatorTests extends TestCase
{
    private $calculator;
  
    public function testAdd()
    {
$this->calculator = new calculadora();
        $result = $this->calculator->sumar(1, 2);
        $this->assertEquals(3, $result);
$this->calculator = NULL;
    }
    public function testMultiply()
    {
$this->calculator = new calculadora();
        $result = $this->calculator->multiplicar(5, 2);
        $this->assertEquals(10, $result);
$this->calculator = NULL;
    }
    public function testDivision()
    {
$this->calculator = new calculadora();
        $result = $this->calculator->dividir(10, 2);
        $this->assertEquals(5, $result);
$this->calculator = NULL;
    }
 public function testSubstration()
    {
$this->calculator = new calculadora();
        $result = $this->calculator->restar(10, 2);
        $this->assertEquals(8, $result);
$this->calculator = NULL;
    }
public function testOperacion()
    {
$this->calculator = new calculadora();
        $result = $this->calculator->operacion(10, 2,'suma');
        $this->assertEquals(12, $result);
        $result = $this->calculator->operacion(10, 2,'resta');
        $this->assertEquals(8, $result);
        $result = $this->calculator->operacion(10, 2,'multiplica');
        $this->assertEquals(20, $result);
        $result = $this->calculator->operacion(10, 2,'divide');
        $this->assertEquals(5, $result);
$this->calculator = NULL;

    }
}
