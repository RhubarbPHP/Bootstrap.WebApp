#!/bin/bash

docker exec -e "rhubarb_app=\Your\WebApp\DockerApplication" -it bs_app /var/www/html/bin/custard $1 $2 $3 $4