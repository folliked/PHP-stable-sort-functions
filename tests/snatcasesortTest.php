<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-08-25 at 12:28:08.
 */
class snatcasesortTest extends PHPUnit_Framework_TestCase {

	/**
	 * @covers sasort
	 * @group  stablesort
	 */
	public function testAssociation() {
		$array = array('a9', 'a1', 'a10', 'A2');
		snatcasesort($array);
		$this->assertSame(array(1 => 'a1', 3 => 'A2', 0 => 'a9', 2 => 'a10'), $array);
	}
}