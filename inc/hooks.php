<?php
/**
 * studentlifeUOL hook list.
 *
 * @package WordPress
 * @subpackage studentlifeUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */



/**
 * HTML <body> hooks
 */
 function studentlifeUOL_body_top() {
	 do_action( 'studentlifeUOL_body_top' );
 }

 function studentlifeUOL_body_bottom() {
	 do_action( 'studentlifeUOL_body_bottom' );
 }

/**
 * HTML <header> hooks
 * Outside the <header> element, top & bottom.
 *
 */
function studentlifeUOL_head_before() {
	do_action( 'studentlifeUOL_head_before' );
}

function studentlifeUOL_head_after() {
	do_action( 'studentlifeUOL_head_after' );
}

/**
 * HTML <header> hooks
 * Inside the <header> element, top & bottom.
 *
 */
function studentlifeUOL_header_top() {
	do_action( 'studentlifeUOL_header_top' );
}

function studentlifeUOL_header_bottom() {
	do_action( 'studentlifeUOL_header_bottom' );
}


/**
 * Semantic <content> hooks
 * Outside & inside main <content> element, top & bottom.
 * 
 */
function studentlifeUOL_content_before() {
	do_action( 'studentlifeUOL_content_before' );
}

function studentlifeUOL_content_after() {
	do_action( 'studentlifeUOL_content_after' );
}

function studentlifeUOL_content_top() {
	do_action( 'studentlifeUOL_content_top' );
}

function studentlifeUOL_content_bottom() {
	do_action( 'studentlifeUOL_content_bottom' );
}