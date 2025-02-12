<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../kata50.php';

class SetTreeTest extends TestCase
{
  public function testSetTreeWithInvalidNumber()
  {
      $this->expectException(ValueError::class);
      setTree(-3);
  }

  public function testSetTreeWithString()
  {
      $this->expectException(TypeError::class);
      setTree('d');
  }
}