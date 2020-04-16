mysql -u ${MYSQL_USER} -p${MYSQL_PASSWORD} -e 'CREATE TABLE bar(message VARCHAR(32));INSERT INTO bar (message) VALUES ("Hello World")' ${MYSQL_DATABASE}
