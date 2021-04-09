<?php

namespace lsmj;

class phrint
{

    /**
	 *
	 * p (Print): Outputs type and value of input with html formatting
	 *
	 * @param mixed $var
	 *
	 * @return void
	 */
	static function p($var)
	{
		echo '<pre style="background-color:#dfdac4;padding:20px;border-radius:10px;color:#452317;">';
		if (is_array($var)) {
			print_r($var);
		} elseif (is_object($var)) {
			echo ucfirst(gettype($var)) . '<br>';
			echo json_encode($var, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
		} else {
			if (is_bool($var) === true) {
				echo ucfirst(gettype($var)) . '<br>';
				if ($var) {
					echo 'TRUE';
				} else {
					echo 'FALSE';
				}
			} else {
				echo '<strong>' . ucfirst(gettype($var)) . '</strong><br>';
				if (is_string($var)) {
					echo '"' . $var . '"';
				} else {
					echo $var;
				}
			}
		}
		echo '</pre>';
	}

	/**
	 *
	 * C (Console): Outputs type and value of input without html formatting
	 *
	 * @param mixed $var
	 *
	 * @return void
	 */
	static function c($var)
	{
		if (is_array($var)) {
			echo 'Type: ' . gettype($var) . PHP_EOL;
			print_r($var);
		} elseif (is_object($var)) {
			echo 'Type: ' . gettype($var) . PHP_EOL;
			echo json_encode($var, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
		} else {
			echo 'Type: ' . gettype($var) . PHP_EOL;
			echo $var;
		}
	}

	/**
	 *
	 * m (Message): Outputs the input in the same style as p()
	 *
	 * @param mixed $var
	 *
	 * @return void
	 */
	static function m($var)
	{
		echo '<pre style="background-color:#dfdac4;padding:20px;border-radius:10px;color:#452317;">';
		echo $var;
		echo '</pre>';
	}

	/**
	 *
	 * l (List): Prints the input as a vertical list
	 *
	 * @param string $var string
	 *
	 * @return void
	 */
	static function l(string $var, string $delimiter = ",", string $remove_string = null)
	{
		if ($remove_string) {
			$remove_string = preg_quote($remove_string, "/");
			$var = preg_replace("/$remove_string/", '', $var);
		}
		$items = explode($delimiter, $var);
		echo '<pre style="background-color:#dfdac4;padding:20px;border-radius:10px;color:#452317;">';
		foreach ($items as $item) {
			echo $item . '<br>';
		}
		echo '</pre>';
	}

}
