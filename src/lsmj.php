<?php

namespace lsmj;

class lsmj
{

	/**
	 *
	 * p (Print): Analyzes and outputs variable of any type
	 *
	 * @param string/array/object $input any type of input
	 * 
	 * @return void
	 */
	static function p($input) {
		echo '<pre style="background-color:#dfdac4;padding:20px;border-radius:10px;color:#452317;">';
		if (is_array($input)) {
			echo '<strong>Type: ' . gettype($input) . '</strong><br>';
			print_r($input);
		} elseif (is_object($input)) {
			echo '<strong>Type: ' . gettype($input) . '</strong><br>';
			echo json_encode($input, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
		} else {
			echo '<strong>Type: ' . gettype($input) . '</strong><br>';
			echo $input;
		}
		echo '</pre>';
	}

	/**
	 *
	 * l (List): Attempts to produce a list with line breaks based on input criteria
	 *
	 * @param string $input string
	 * 
	 * @return void
	 */
	static function l(string $input, string $seperator=",", string $remove_string=null) {
		$re = '/https:\/\/crm\.na1\.insightly\.com\/Settings\/UserDetails\//m';
		if ($remove_string) {
			$remove_string = preg_quote($remove_string, "/");
			$input = preg_replace("/$remove_string/", '', $input);
		}
		$items = explode($seperator, $input);
		echo '<pre style="background-color:#dfdac4;padding:20px;border-radius:10px;color:#452317;">';
		foreach ($items as $item) {
			echo $item . '<br>';
		}
		echo '</pre>';
	}

}