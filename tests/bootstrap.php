<?php

$_tests_dir = getenv( 'WP_TESTS_DIR' );
if ( ! $_tests_dir ) {
	$_tests_dir = '/tmp/wordpress-tests-lib';
}

require_once $_tests_dir . '/includes/functions.php';

function _manually_load_plugin() {
	require dirname( dirname( __FILE__ ) ) . '/simply-static.php';
}
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );

require $_tests_dir . '/includes/bootstrap.php';

// Include helpers
require_once 'helpers/class-simply-static-url-response-factory.php';
require_once 'helpers/class-simply-static-url-extractor-factory.php';
require_once 'helpers/class-simply-static-page-factory.php';
