# Docker compose to run NGINX MYSQL PHP

This project allows to build a LEMP stack based on docker compose, images 


## Requirements:

- docker, docker-compose and git must be installed on the local machine.


## Getting Started:

This project builds a docker compose running 3 images: 

- An nginx image latest ( 1.17 )

- A mysql image ( with name my-mysql ) : built from a Mysql latest ( 8.0.9 ), and customized by adding an initdb script in order to create a database "foo", a table "bar" with a row containing "Hello World".

- A php-fpm image ( with name my-php-fpm-mysqli ) : built from a php-fpm latest ( 7.4-fpm ), and customized by installed mysqli module in order to use mysqli_connect, mysql_fetsh_row, ... 

* Installation: 

1. Download the repo or use git to clone in your home directory: 

   git clone https://gitlab.com/ghassencherni/docker_ci.git

2. Change you directory: 

   cd docker_ci

3. Build the customized mysql image: 
   
   docker build -t  my-mysql mysql

4. Build the customized php-fpm image :

   docker build -t  my-php-fpm-mysqli php-fpm-mysqli/ 

5. Run the docker compose to deploy your LEMP envirenment :

   docker-compose up -d


## How to test the deploy:

- Connect to you broser and put the URL: http://< you host IP >:8080

- You can also use : curl -silent < you host IP >:8080

- Please check that you are able to get "Hello World" (string stord in the Mysql)


## Gitlab Runner

You can run this project as a pipline usinig Gitlab runner, in order to use it please configure your gitlab-runner daemon
and check ".gitlab-ci.yml" in this repository


## Author Information

This script  was created by [Ghassen CHARNI](https://github.com/ghassencherni/) 
