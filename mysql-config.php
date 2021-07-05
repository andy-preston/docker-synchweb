<?php

require '/usr/local/src/api/config.php';

list($host, $db) = explode('/', $isb['db']);
$port = array_key_exists('port', $isb) ? $isb['port'] : '3306';

pcntl_exec(
    '/usr/bin/mysql',
    [
        "--host={$host}",
        "--port={$port}",
        "--database={$db}",
        "--user={$isb['user']}",
        "--password={$isb['pass']}",
    ]
);
