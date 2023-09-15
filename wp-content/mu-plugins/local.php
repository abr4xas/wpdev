<?php

/**
 * Plugin Name: Local MU pluins
 * Description: Just for local testing
 * Author:      Angel Cruz
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Basic security, prevents file from being loaded directly.
defined('ABSPATH') or die('LOL');

add_action('phpmailer_init', 'wpdev_change_email_settings_for_local_testing');

function wpdev_change_email_settings_for_local_testing($phpmailer)
{
	$phpmailer->isSMTP();
	$phpmailer->Host = 'mailhog';
	$phpmailer->SMTPAuth = false;
	$phpmailer->Port = '1025';
	$phpmailer->From = 'admin@domain.tld';
	$phpmailer->FromName = 'WPDEV';
}
