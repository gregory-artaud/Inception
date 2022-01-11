SUDO=sudo

all: start

start: build
	docker-compose -f srcs/docker-compose.yml up -d

build: 
	docker-compose -f srcs/docker-compose.yml build

clean:
	docker-compose -f srcs/docker-compose.yml down
	docker rmi -f $(shell docker images -q)
	docker volume rm $(shell docker volume ls -q)

fclean: clean
	$(SUDO) rm -rf /home/gartaud/data/mariadb/* /home/gartaud/data/wordpress/*

re: fclean start