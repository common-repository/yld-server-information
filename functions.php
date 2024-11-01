<?php

/*
 * functions
 *  yld_get_info()
 *  yld_get_mysql_version()
 */

function yld_get_info() {
    $info = array(
        'System' => PHP_OS,
        'Server Environment' => $_SERVER["SERVER_SOFTWARE"],
        'Available Space' => round((disk_free_space(".") / (1024 * 1024)), 2) . 'M',
        'Server Name [IP]' => $_SERVER['SERVER_NAME'] . ' [ ' . gethostbyname($_SERVER['SERVER_NAME']) . ' ]',
        'Port Number' => $_SERVER['SERVER_PORT'],
        'Document Root' => $_SERVER["DOCUMENT_ROOT"],
        'MySQL Version' => yld_get_mysql_version(),
        'PHP Version' => PHP_VERSION,
        'PHP memory limit' => ini_get('memory_limit'),
        'PHP max upload filesize' => ini_get('upload_max_filesize'),
        'PHP max post size' => ini_get('post_max_size'),
        'PHP max execution time' => ini_get("max_execution_time") . 's',
        'Server Protocol' => $_SERVER['SERVER_PROTOCOL'],
        'User Agent' => substr($_SERVER['HTTP_USER_AGENT'], 0, 40),
        'User IP' => $_SERVER['REMOTE_ADDR'],
        // version 1.1
        'Wordpress max upload filesize ' => wp_max_upload_size()/1024/1024 . 'M',
    );
    return $info;
}

function yld_get_mysql_version() {
    global $wpdb;
    $mysqlinfo = $wpdb->get_results('select version()');
    $mysqlinfoArray = (array)$mysqlinfo[0];
    return $mysqlinfoArray["version()"];
}

