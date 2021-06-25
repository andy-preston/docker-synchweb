<?php

require_once('/usr/local/src/api/config.php');

list($host, $db) = explode('/', $isb['db']);

pcntl_exec('/usr/bin/mysql', [
    "--host={$host}",
    '--port=3306',
    "--database={$db}",
    "--user={$isb['user']}",
    "--password={$isb['pass']}",
]);
