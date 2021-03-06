<?php
	/**
	 * Render a local date.
	 * 
	 * @package core
	 * @license The MIT License (see LICENCE.txt), other licenses available.
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 * @copyright Marcus Povey 2009-2012
	 * @link http://platform.barcamptransparency.org/
	 */

	$vars['format'] = 'Y-m-d H:i';

	echo view('output/time', $vars);