<?php
$dbIni = parse_ini_file('config_db.ini');
$create_table = new PDO($dbIni['connection'], $dbIni['user'], $dbIni['password']);
$query = 'CREATE TABLE url_table
                (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, url BLOB, user_url VARCHAR(50), expiry_date TIMESTAMP DEFAULT 0)';
$create_table->query($query);
$query = 'SET GLOBAL event_scheduler = ON';
$create_table->query($query);
$query = "CREATE EVENT del_olds 
                ON SCHEDULE
                EVERY 1 HOUR DO
                    DELETE FROM url_table
                    WHERE expiry_date
                    BETWEEN '2015-01-01 00:00:00' AND CURRENT_TIMESTAMP";
$create_table->query($query);