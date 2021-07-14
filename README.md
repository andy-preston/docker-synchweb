# Docker Container(s) For SynchWeb Development

At the moment, this is all very much in a state of "it works on my machine"...

## [start-all](start-all)

Script to start all of the services in their own tabs of an
[xfce4-terminal](https://docs.xfce.org/apps/terminal/start).

## [mariadb](mariadb)

A generic container for a MariaDB instance.

Not currently being used / developed. I'm using our on-site development
server for database access as this has more "realistic" data than I could
provide in my own instance.

## Linters

The `lint-docker` script and the `php`, `phpcs` & `phpmd` symlinks
enable you to run linter extensions from VSCode with the linters living in the
container. If you're using a different IDE or different IDE plugins to access
these linters, you might need to modify the [lint-docker](lint-docker) wrapper

## [web](web) - The main script for doing everything
