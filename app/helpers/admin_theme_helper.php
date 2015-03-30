<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Partial Helper
 *
 * Loads the partial
 *
 * @param string $file The name of the file to load.
 * @param string $ext The file's extension.
 */
function file_partial($file = '', $ext = 'php')
{
	$CI = & get_instance();
	$data = & $CI->load->_ci_cached_vars;

	$path = $data['template_views'].'partials/'.$file;

	echo $CI->load->_ci_load(array(
		'_ci_path' => $data['template_views'].'partials/'.$file.'.'.$ext,
		'_ci_return' => TRUE
	));
}

/**
 * Template Partial
 *
 * Display a partial set by the template
 *
 * @param string $name The view partial to display.
 */
function template_partial($name = '')
{
	$CI = & get_instance();
	$data = & $CI->load->_ci_cached_vars;

	echo isset($data['template']['partials'][$name]) ? $data['template']['partials'][$name] : '';
}

/**
 * Accented Foreign Characters Output
 *
 * @return null|array The array of the accented characters and their replacements.
 */
function accented_characters()
{
	if (defined('ENVIRONMENT') AND is_file(APPPATH.'config/'.ENVIRONMENT.'/foreign_chars.php'))
	{
		include(APPPATH.'config/'.ENVIRONMENT.'/foreign_chars.php');
	}
	elseif (is_file(APPPATH.'config/foreign_chars.php'))
	{
		include(APPPATH.'config/foreign_chars.php');
	}

	if (!isset($foreign_characters))
	{
		return;
	}

	$languages = array();
	foreach ($foreign_characters as $key => $value)
	{
		$languages[] = array(
			'search' => $key,
			'replace' => $value
		);
	}

	return $languages;
}