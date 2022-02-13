service mysql start
if [ ! -d "/var/lib/mysql/wordpress" ]; then
	mysql_install_db
	/usr/bin/mysqld_safe &
	sleep 10s
	echo "GRANT ALL ON *.* TO root@'%' IDENTIFIED BY '${DB_ROOT_PASSWORD}'; FLUSH PRIVILEGES;" | mysql
	killall mysqld
	sleep 10s
	mysql -e "CREATE USER '${DB_USER}'@'localhost' IDENTIFIED BY '${DB_PASSWORD}';" && \
		mysql -e "GRANT ALL PRIVILEGES ON *.* TO '${DB_USER}'@'localhost' WITH GRANT OPTION;" && \
		mysql -e "CREATE USER '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}';" && \
		mysql -e "GRANT ALL PRIVILEGES ON *.* TO '${DB_USER}'@'%' WITH GRANT OPTION;" && \
		mysql -e "CREATE DATABASE IF NOT EXISTS ${DB_NAME};"
	mysql ${DB_NAME} < /wordpress.sql
	service mysql stop
fi
#tail -f
#service mysql start
mysqld
