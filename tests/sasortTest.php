<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-08-25 at 12:28:08.
 */
class sasortTest extends PHPUnit_Framework_TestCase {

	/**
	 * @covers sasort
	 * @group  stablesort
	 */
	public function testAssociation() {
		$source = array(
			'a'	=> 3,
			'b'	=> 2,
			'c'	=> 2,
			'd'	=> 1,
		);
		
		$expected = array(
			'd'	=> 1,			
			'b'	=> 2,
			'c'	=> 2,
			'a'	=> 3,
		);
		
		$array = $source;
		asort($array);
		$this->assertNotSame($expected, $array);
		
		$array = $source;
		sasort($array);
		$this->assertSame($expected, $array);
	}
	
	/**
	 * @covers sasort
	 * @group  stablesort
	 */
	public function testNatural() {	
		$array = array('a9', 'a1', 'a10');
		sasort($array, SORT_REGULAR);
		$this->assertNotSame(array(1 => 'a1', 0 => 'a9', 2 => 'a10'), $array);
		
		$array = array('a9', 'a1', 'a10');
		sasort($array, SORT_NATURAL);
		$this->assertSame(array(1 => 'a1', 0 => 'a9', 2 => 'a10'), $array);
	}
}