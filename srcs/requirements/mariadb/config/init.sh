if [ ! -d "/var/lib/mysql/wordpress" ]; then
	mysql_install_db
	service mysql start

	mysql -e "CREATE USER '${DB_USER}'@'localhost' IDENTIFIED BY '${DB_PASSWORD}';" && \
		mysql -e "CREATE DATABASE IF NOT EXISTS ${DB_NAME};" && \
		mysql -e "GRANT ALL PRIVILEGES ON *.* TO '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}';" && \
		mysql -e "FLUSH PRIVILEGES;"
	service mysql stop
fi
mysqld