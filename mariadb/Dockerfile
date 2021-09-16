FROM centos:7
ENV TERM=linux
COPY mysql-config.php /usr/local/bin
RUN yum install -y \
        mariadb \
        php-cli php-mbstring php-mysqlnd php-xml && \
    echo Cleanup && \
    rm -rf /usr/share/doc/*

