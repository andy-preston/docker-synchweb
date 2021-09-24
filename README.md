# Docker Container(s) For SynchWeb Development

# Config

`database_config` in your top level directory (where this readme is)
needs to look something like this:

    dev:_USER_:_PASSWORD_:server.example.com:_DB_NAME_:3306
    prod:_USER_:_PASSWORD_:server.example.com:_DB_NAME_:3306

For the database config to work correctly, with the ssh tunnel, you should
make sure you've got no `$isp = ` or `$motd =` lines in your `app/config.php`


There's also some config options in `env`

## Filesystem

This expects you to have an entry like this in your /etc/fstab

    sshfs#user@example.com:/dls /media/dls fuse users,noauto,allow_other,default_permissions,idmap=user,uid=1000 0 0

# Running

At the moment, this is all very much in a state of "it works on my machine"...

## backend

    ../docker/php/start shell    bash
    ../docker/php/start backend  PHP dev. server
    ../docker/php                Run PHP with params
    ../docker/phpcs              Run PHP Code Sniffer
    ../docker/phpmd              Run PHP Mess Detector

## frontend

    ../docker/js/start shell    bash
    ../docker/js/start frontend Webpack dev. server

## mariadb command line

    ../docker/mariadb/start

