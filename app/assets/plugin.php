<?php

class KokenPluginName extends KokenPlugin {

	function __construct() {
		$this->require_setup = true;
		$this->register_hook('before_closing_head', 'render');
		$this->register_filter('api.text', 'filterOutput');
	}

	// Load resources and render scripts to the page
	function render() {

		$css = $this->get_path() . '/css/plugin.css';

		$css_block = '#submit-button{color:' . $this->data->color . ';}';

		$js = $this->get_path() . '/js/plugin.js';

		// Build script
		$output = '';

		if (!empty($this->data->email)) {

			$output .= "
			$(document).ready(function(){
				// do stuff
			});";
			
		}

		echo <<<OUT

	<link rel="stylesheet" type="text/css" href="$css" />
	<style>$css_block</style>
	<script src="$js"></script>
	<script type="text/javascript">$output</script>
OUT;

	}

	// Setup front end html
	function filterOutput($output) {
		return $output;
	}

}