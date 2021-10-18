FROM ubuntu:bionic
ENV TERM=linux
ENV DEBIAN_FRONTEND=noninteractive

COPY requirements.txt /var/tmp/requirements.txt
COPY requirements-tasks.txt /var/tmp/tasks/requirements.txt
COPY requirements-pyispyb.txt /var/tmp/pyispyb/requirements.txt

RUN echo "black" >> /var/tmp/requirements.txt && \
    cat /var/tmp/requirements.txt && \
    apt-get update && \
    apt-get -y upgrade && \
    apt-get -y --no-install-recommends install \
        python3 \
        python3-mysqldb \
        python3-pip \
        libmariadbclient-dev && \
    pip3 install -r /var/tmp/requirements.txt

