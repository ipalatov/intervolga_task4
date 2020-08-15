# О проекте
---
#### Тестовое задание на реализацию интерфейса добавления и просмотра данных на чистом PHP 

Текст задачи в файле **task4.txt** в корневой директории репозитория и на главной странице сайта.

Дамп базы данных (MySQL) **intervolga_task4.sql** в корневой директории репозитория.

В файле **config.php** в **APP_ROOT** указать путь относительно корня - если корень сайта находится не в корне хоста. Там же указать параметры доступа к базе данных.

#### Примечания:
1) Маршрутизация прописана в classes\route.php по принципу /controller/action.
2) Подключен автозагрузчик классов psr-4.
3) Реализована защита от SQL-инъекций и от вывода HTML.
4) Подключение к базе данных через PDO.
5) Включен вывод ошибок и информативных сообщений.
6) Редирект после отправки данных на сервер методом POST.
7) Во фронтенде использован **Bootstrap 4**.
8) По мере необходимости код прокомментирован.