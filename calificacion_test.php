<?php 
use PHPunit\Framework\TestCase;
/**
 *
 */
class LogicaComputacionalTest extends TestCase
{
    function testPromedio(){ 
        $this->assertEquals(7,LogicaComputacional::Promedio(7,7,7,7,7));
    }
}