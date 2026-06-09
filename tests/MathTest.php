<?php
require_once __DIR__ . '/../src/Math.php';

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase {
  public function testAddition() {
    $math = new Math();
    $this->assertEquals(5, $math->addition(2, 3));
  }
}