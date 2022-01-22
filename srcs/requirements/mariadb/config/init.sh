if [ ! -d "/var/lib/mysql/wordpress" ]; then
	mysql_install_db
	service mysql start

	mysql -e "CREATE USER '${DB_USER}'@'localhost' IDENTIFIED BY '${DB_PASSWORD}';" && \
		mysql -e "GRANT ALL PRIVILEGES ON *.* TO '${DB_USER}'@'localhost' WITH GRANT OPTION;" && \
		mysql -e "CREATE USER '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}';" && \
		mysql -e "GRANT ALL PRIVILEGES ON *.* TO '${DB_USER}'@'%' WITH GRANT OPTION;" && \
		mysql -e "CREATE DATABASE IF NOT EXISTS ${DB_NAME};"
	service mysql stop
fi
mysqld