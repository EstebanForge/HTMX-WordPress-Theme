<?php
// No direct access.
defined('ABSPATH') || exit('Direct access not allowed.');

// Secure it.
if (!hm_validate_request()) {
	hm_die('Nonce verification failed.');
}

// Action = demo
if (!isset($hmvals['action']) || $hmvals['action'] != 'demo') {
	hm_die('Invalid action.');
}

// Do some server-side processing with the received $hmvals
sleep(5); // Fake it until you make it

// Send our response
hm_send_header_response(
	[
		'status'  => 'success',
		'message' => 'Server-side processing done.',
		'params'  => $hmvals,
	],
	'alert' // optional
);
