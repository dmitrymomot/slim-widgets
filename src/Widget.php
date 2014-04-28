<?php

namespace Slim\Extension;

use \League\Plates\Engine;
use \League\Plates\Template;

abstract class Widget {

	/**
	 * var mixed
	 */
	public $data;

	/**
	 * var string
	 */
	public $templatePath;

	/**
	 * @param 	mixed 	$data
	 * @return 	void
	 */
	public function __construct($data = null)
	{
		$this->data = $data;
	}

	/**
	 * Render widget
	 *
	 * @param 	string 	$view	// view name
	 * @param 	array 	$data	// array data, which will set in template
	 * @reuturn string			// rendered template
	 */
	public function render($view, array $data = null)
	{
		$engine = new Engine($this->templatePath);
		$template = new Template($engine);
		return $template->render($view, $data);
	}
}
