FROM php:7.4-cli

ADD . /Sinatra-Docker
WORKDIR /Sinatra-Docker
RUN bundle install

EXPOSE 4567

CMD ["/bin/bash"]