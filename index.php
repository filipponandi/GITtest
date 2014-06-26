<?php
class HelloWorld {
	private $test = true;
	
	/**
	 * Getter for $test
	 * @return boolean
	 */
	public function getTest() {
		return $this->test;	
	}
	
	/**
	 * Do nothing return nothing
	 * @return NULL
	 */
	private function doNothing() {
		return null;
	}
	
	protected function doubleTest() {
	}
}

function hello() {
	
}

function aa() {
	echo "ciao";
}
?>