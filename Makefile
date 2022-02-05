SUDO=sudo

all: start

start: build
	docker-compose --env-file srcs/.env -f srcs/docker-compose.yml up -d

build:
	docker-compose --env-file srcs/.env -f srcs/docker-compose.yml build

clean:
	docker-compose --env-file srcs/.env -f srcs/docker-compose.yml down
	docker rmi -f $(shell docker images -q)
	docker volume rm $(shell docker volume ls -q)

fclean: clean
	$(SUDO) rm -rf /home/gartaud/data/wordpress/*
	$(SUDO) rm -rf /home/gartaud/data/mariadb/*

re: fclean start
