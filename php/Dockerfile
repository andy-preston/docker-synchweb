FROM centos:7
ENV TERM=linux
ENV COMPOSER_HOME=/var/tmp/composer

COPY lint-docker /usr/local/bin

RUN yum install -y \
        git unzip zip \
        php-cli php-mbstring php-mysqlnd php-xml && \
    curl -sS https://getcomposer.org/installer | \
        php -- --install-dir=/usr/local/bin --filename=composer && \
    curl -S --output /usr/local/bin/phpcs --location \
        https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar && \
    curl -S --output /usr/local/bin/phpmd --location \
        https://phpmd.org/static/latest/phpmd.phar && \
    echo Local Setup && \
    chmod a+x /usr/local/bin/* && \
    mkdir -p $COMPOSER_HOME && \
    chmod a+w $COMPOSER_HOME && \
    groupadd --gid 1000 dev && \
    useradd --create-home --shell /bin/bash --gid 1000 --uid 1000 dev && \
    echo Cleanup && \
    rm -rf /usr/share/doc/*
