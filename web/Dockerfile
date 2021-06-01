FROM ubuntu:bionic
ENV TERM=linux
ENV DEBIAN_FRONTEND=noninteractive
ENV COMPOSER_HOME=/var/tmp/composer

RUN apt-get update && \
    apt-get -y upgrade && \
    apt-get -y --no-install-recommends install \
        gnupg curl ca-certificates && \
    echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu bionic main" \
        > /etc/apt/sources.list.d/ondrej-php.list && \
    apt-key adv --keyserver keyserver.ubuntu.com \
        --recv-keys 4F4EA0AAE5267A6C && \
    echo "deb https://deb.nodesource.com/node_10.x bionic main" \
        > /etc/apt/sources.list.d/nodesource.list && \
    curl -sS https://deb.nodesource.com/gpgkey/nodesource.gpg.key | \
        apt-key add - && \
    apt-get update && \
    apt-get -y --no-install-recommends install \
        default-mysql-client git nodejs unzip zip \
        php5.6-bcmath php5.6-cli php5.6-curl php5.6-json php5.6-mbstring \
        php5.6-mysqli php5.6-opcache php5.6-readline php5.6-xml php5.6-zip && \
    curl -sS https://getcomposer.org/installer | \
        php -- --install-dir=/usr/local/bin --filename=composer && \
    curl -sS --output /usr/local/bin/phpcs --location \
        https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar && \
    curl -sS --output /usr/local/bin/phpmd --location \
        https://phpmd.org/static/latest/phpmd.phar && \
    chmod a+x /usr/local/bin/* && \
    mkdir -p $COMPOSER_HOME && \
    chmod a+w $COMPOSER_HOME && \
    groupadd --gid 1000 dev && \
    useradd --create-home --shell /bin/bash --gid 1000 --uid 1000 dev && \
    apt-get -y --purge remove \
        gnupg && \
    apt-get -y --purge autoremove && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

