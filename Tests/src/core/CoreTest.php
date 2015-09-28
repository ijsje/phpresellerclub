<?php

// TODO: use autoloader
require_once __DIR__ . '/../../../src/index.php';

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-09-28 at 22:25:43.
 */
class CoreTest extends PHPUnit_Framework_TestCase {

  /**
   * @var Core
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp() {
    $this->object = new Core;
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown() {
    
  }

  /**
   *
   * @covers Core::createUrlParameters
   */
  public function testCreateUrlParametersSimpleQuery() {
    $simpleUrlArray = array(
      'auth-userid' => 'xxxx',
      'api-key' => 'yyyy',
      'domain-name' => 'domain1',
      'tlds' => 'com',
    );
    $simpleUrl = 'auth-userid=xxxx&api-key=yyyy&domain-name=domain1&tlds=com';
    $this->assertEquals(
        $simpleUrl, $this->object->createUrlParameters($simpleUrlArray)
    );
  }

}
