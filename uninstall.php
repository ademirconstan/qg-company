<?php
/**
 * Uninstall script for WhatJobs Feeder
 */

// If uninstall not called from WordPress, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Delete plugin options
delete_option('whatjobs_feeder_publisher_id');
delete_option('whatjobs_feeder_default_status');
delete_option('whatjobs_feeder_version');

// Delete feeds table
global $wpdb;
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}whatjobs_feeds");

// Delete imported jobs meta
$wpdb->query("DELETE FROM {$wpdb->postmeta} WHERE meta_key LIKE '_whatjobs_feeder_%'");

// Clear scheduled cron events
wp_clear_scheduled_hook('whatjobs_feeder_cron_hook');

// Clear any remaining cron events for individual feeds
$crons = _get_cron_array();
if (!empty($crons)) {
    foreach ($crons as $timestamp => $cron) {
        foreach ($cron as $hook => $events) {
            if (strpos($hook, 'whatjobs_feeder_') === 0) {
                wp_unschedule_event($timestamp, $hook);
            }
        }
    }
}