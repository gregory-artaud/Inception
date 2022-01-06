

all: start

start: build up

build: network
	docker-compose -f srcs/docker-compose.yml

up:
	docker run -itd --network=docker-network nginx
	docker run -itd --network=docker-network mariadb
	docker run -itd --network=docker-network wordpress

network:
	docker network create -d bridge docker-network
