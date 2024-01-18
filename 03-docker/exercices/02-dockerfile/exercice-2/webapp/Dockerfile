FROM ubuntu:20.04

RUN apt-get -yqq update
RUN apt-get -yqq install python3-pip python3-dev curl gnupg libmysqlclient-dev

COPY . /opt/flask-app
WORKDIR /opt/flask-app

RUN pip3 install -r requirements.txt
RUN pip3 install --upgrade Flask Jinja2 flask_sqlalchemy

CMD [ "python3", "./server.py" ]