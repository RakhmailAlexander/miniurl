# miniurl
#	Для того, чтобы установить проект на локальную машину необходимо 
запустить виртуальный сервер Apache, создать папку под проект и 
скачать в нее файлы из репозитория. 
	Далее следует создать пустую базу данных MySql и отредактировать 
файл config_db.ini, введя в нем информацию о соединении и название 
созданной базы данных. После этого запустить файл create.table.php, 
который создаст структуру базы данных. Либо выполнить импорт базы 
из дампа, который находится в репозитории и включить в MySql выполнение
событий по расписанию командой: "SET GLOBAL event_scheduler = ON".
	Затем запустить из папки Composer install, который добавит в 
проект необходимые библиотеки. Profit!
