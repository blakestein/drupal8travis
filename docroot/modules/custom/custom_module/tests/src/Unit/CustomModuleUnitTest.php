<?php

namespace Drupal\Tests\custom_module\Unit;

use Drupal\Tests\UnitTestCase;

/**
 * Unit test cases for custom module.
 *
 * @group slalom
 */
class CustomModuleUnitTest extends UnitTestCase {

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
    $this->isTrue = TRUE;
  }

  /**
   * This is true.
   */
  public function testSomethingFun() {
    $this->assertEquals(TRUE, $this->isTrue);
  }

}
