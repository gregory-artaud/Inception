SUDO=sudo
ENV=srcs/.env
DOCKERYML=srcs/docker-compose.yml
WORDPRESS_VOL=/home/gartaud/data/wordpress
MARIADB_VOL=/home/gartaud/data/mariadb

all: up

create_volumes:
	$(SUDO) mkdir -p $(WORDPRESS_VOL) $(MARIADB_VOL)

clear_volumes:
	$(SUDO) rm -rf $(WORDPRESS_VOL)/* $(MARIADB_VOL)/*

delete_volumes:
	$(SUDO) rm -rf $(WORDPRESS_VOL) $(MARIADB_VOL)

up: create_volumes
	$(SUDO) docker-compose --env-file $(ENV) -f $(DOCKERYML) up -d --build

down:
	$(SUDO) docker-compose --env-file $(ENV) -f $(DOCKERYML) down

clean: down clear_volumes

fclean: clean delete_volumes
	@$(SUDO) ./clear_docker.sh

re: clean up

.PHONY: all up down clean fclean re clear_volumes delete_volumes
