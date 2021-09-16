FROM centos:7
ENV TERM=linux
RUN curl -sL https://rpm.nodesource.com/setup_12.x | bash - && \
    yum install -y \
        nodejs git && \
    echo Local Setup && \
    groupadd --gid 1000 dev && \
    useradd --create-home --shell /bin/bash --gid 1000 --uid 1000 dev && \
    echo Cleanup && \
    rm -rf /usr/share/doc/*
