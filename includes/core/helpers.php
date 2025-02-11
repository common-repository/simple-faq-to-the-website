<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Require class for admin panel
*/
function mxffi_require_class_file_admin( $file ) {

	require_once MXFFI_PLUGIN_ABS_PATH . 'includes/admin/classes/' . $file;

}


/*
* Require class for frontend panel
*/
function mxffi_require_class_file_frontend( $file ) {

	require_once MXFFI_PLUGIN_ABS_PATH . 'includes/frontend/classes/' . $file;

}

/*
* Require a Model
*/
function mxffi_use_model( $model ) {

	require_once MXFFI_PLUGIN_ABS_PATH . 'includes/admin/models/' . $model . '.php';

}