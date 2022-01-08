SUDO=sudo

all: start

start: build
	docker-compose -f srcs/docker-compose.yml up

build: 
	docker-compose -f srcs/docker-compose.yml build

clean:
	docker-compose -f srcs/docker-compose.yml down
	docker rmi -f $(shell docker images -q)

