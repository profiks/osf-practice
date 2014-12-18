<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-19 03:47:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\Controller\Main.php [ 148 ] in file:line
2014-08-19 03:47:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 03:49:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH\classes\Controller\Main.php [ 148 ] in file:line
2014-08-19 03:49:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 04:24:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\client\modal_add.php [ 21 ] in D:\OpenServer\domains\test\application\views\client\modal_add.php:21
2014-08-19 04:24:55 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\modal_add.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 21, Array)
#1 D:\OpenServer\domains\test\application\views\template.php(37): require('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#4 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\OpenServer\domains\test\application\classes\Controller\Main.php(32): Kohana_Response->body(Object(View))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#13 {main} in D:\OpenServer\domains\test\application\views\client\modal_add.php:21
2014-08-19 04:25:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: number ~ APPPATH\views\client\modal_add.php [ 21 ] in D:\OpenServer\domains\test\application\views\client\modal_add.php:21
2014-08-19 04:25:30 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\modal_add.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 21, Array)
#1 D:\OpenServer\domains\test\application\views\template.php(37): require('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#4 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 D:\OpenServer\domains\test\application\classes\Controller\Main.php(32): Kohana_Response->body(Object(View))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#13 {main} in D:\OpenServer\domains\test\application\views\client\modal_add.php:21
2014-08-19 06:15:37 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  повторяющееся значение ключа нарушает ограничение уникальности "client_numb"
DETAIL:  Ключ "(number)=(4646)" уже существует.
CONTEXT:  SQL-оператор: "INSERT INTO clients(
          number,
          name, 
          last_name, 
          email, 
          adress, 
          city,
          country
        )
        VALUES(
          _number,
          _name, 
          _last_name, 
          _email, 
          _adress, 
          _city,
          _country
        
        )"
функция PL/pgSQL add_client(integer,character varying,character varying,character varying,character varying,character varying,character varying), строка 3, оператор SQL-оператор [ SELECT * FROM add_client(4646,'sdsdsd','Arkan','sdsd@edfdf.ci','adress--select * from clients;','sdsd','Poland') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:15:37 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(57): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(135): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:16:51 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  повторяющееся значение ключа нарушает ограничение уникальности "client_numb"
DETAIL:  Ключ "(number)=(4646)" уже существует.
CONTEXT:  SQL-оператор: "INSERT INTO clients(
          number,
          name, 
          last_name, 
          email, 
          adress, 
          city,
          country
        )
        VALUES(
          _number,
          _name, 
          _last_name, 
          _email, 
          _adress, 
          _city,
          _country
        
        )"
функция PL/pgSQL add_client(integer,character varying,character varying,character varying,character varying,character varying,character varying), строка 3, оператор SQL-оператор [ SELECT * FROM add_client(4646,'sdsdsd','Arkan','sdsd@edfdf.ci','adress--select * from clients;','sdsd','Poland') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:16:51 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(57): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(135): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:17:09 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  повторяющееся значение ключа нарушает ограничение уникальности "client_numb"
DETAIL:  Ключ "(number)=(4646)" уже существует.
CONTEXT:  SQL-оператор: "INSERT INTO clients(
          number,
          name, 
          last_name, 
          email, 
          adress, 
          city,
          country
        )
        VALUES(
          _number,
          _name, 
          _last_name, 
          _email, 
          _adress, 
          _city,
          _country
        
        )"
функция PL/pgSQL add_client(integer,character varying,character varying,character varying,character varying,character varying,character varying), строка 3, оператор SQL-оператор [ SELECT * FROM add_client(4646,'sdsdsd','Arkan','sdsd@edfdf.ci','adress--select * from clients;','sdsd','Poland') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:17:09 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(57): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(135): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:17:31 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  повторяющееся значение ключа нарушает ограничение уникальности "client_numb"
DETAIL:  Ключ "(number)=(4646)" уже существует.
CONTEXT:  SQL-оператор: "INSERT INTO clients(
          number,
          name, 
          last_name, 
          email, 
          adress, 
          city,
          country
        )
        VALUES(
          _number,
          _name, 
          _last_name, 
          _email, 
          _adress, 
          _city,
          _country
        
        )"
функция PL/pgSQL add_client(integer,character varying,character varying,character varying,character varying,character varying,character varying), строка 3, оператор SQL-оператор [ SELECT * FROM add_client(4646,'sdsdsd','Arkan','sdsd@edfdf.ci','adress--select * from clients;','sdsd','Poland') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:17:31 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(57): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(135): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:18:53 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  повторяющееся значение ключа нарушает ограничение уникальности "client_numb"
DETAIL:  Ключ "(number)=(4646)" уже существует.
CONTEXT:  SQL-оператор: "INSERT INTO clients(
          number,
          name, 
          last_name, 
          email, 
          adress, 
          city,
          country
        )
        VALUES(
          _number,
          _name, 
          _last_name, 
          _email, 
          _adress, 
          _city,
          _country
        
        )"
функция PL/pgSQL add_client(integer,character varying,character varying,character varying,character varying,character varying,character varying), строка 3, оператор SQL-оператор [ SELECT * FROM add_client(4646,'sdsdsd','Arkan','sdsd@edfdf.ci','adress--select * from clients;','sdsd','Poland') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:18:53 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(57): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(135): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:20:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Main.php [ 163 ] in file:line
2014-08-19 06:20:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 06:23:10 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  повторяющееся значение ключа нарушает ограничение уникальности "client_numb"
DETAIL:  Ключ "(number)=(11111)" уже существует.
CONTEXT:  SQL-оператор: "INSERT INTO clients(
          number,
          name, 
          last_name, 
          email, 
          adress, 
          city,
          country
        )
        VALUES(
          _number,
          _name, 
          _last_name, 
          _email, 
          _adress, 
          _city,
          _country
        
        )"
функция PL/pgSQL add_client(integer,character varying,character varying,character varying,character varying,character varying,character varying), строка 3, оператор SQL-оператор [ SELECT * FROM add_client(11111,'sdsdsd','Arkan','sdsd@edfdf.ci','adress--select * from clients;','','') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:23:10 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(57): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(131): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:48:01 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: ",")
LINE 1: SELECT * FROM add_client(,'','','','','','')
                                 ^ [ SELECT * FROM add_client(,'','','','','','') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 06:48:01 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(57): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(133): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:08:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\classes\Model\clients.php [ 30 ] in file:line
2014-08-19 08:08:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 08:10:29 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  функция lqist_all_clients() не существует
LINE 1: SELECT * FROM lqist_all_clients()
                      ^
HINT:  Функция с данными именем и типами аргументов не найдена. Возможно, вам следует добавить явные преобразования типов. [ SELECT * FROM lqist_all_clients() ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:10:29 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM l...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(28): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(41): Model_Clients->get_all_clients()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_allClients()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 08:20:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\Controller\Main.php [ 162 ] in file:line
2014-08-19 08:20:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 08:25:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\classes\Controller\Main.php [ 122 ] in file:line
2014-08-19 08:25:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 08:25:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\classes\Controller\Main.php [ 122 ] in file:line
2014-08-19 08:25:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 08:26:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\classes\Controller\Main.php [ 121 ] in file:line
2014-08-19 08:26:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:00:00 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: ",")
LINE 1: SELECT * FROM add_client(,'','','','','','')
                                 ^ [ SELECT * FROM add_client(,'','','','','','') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 09:00:00 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(67): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(115): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 09:03:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Model\clients.php [ 67 ] in file:line
2014-08-19 09:03:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:03:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Model\clients.php [ 67 ] in file:line
2014-08-19 09:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:03:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Model\clients.php [ 67 ] in file:line
2014-08-19 09:03:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:03:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Model\clients.php [ 67 ] in file:line
2014-08-19 09:03:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:04:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Model\clients.php [ 67 ] in file:line
2014-08-19 09:04:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:05:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH\classes\Model\clients.php [ 67 ] in file:line
2014-08-19 09:05:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:05:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH\classes\Model\clients.php [ 67 ] in file:line
2014-08-19 09:05:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:06:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH\classes\Model\clients.php [ 67 ] in file:line
2014-08-19 09:06:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:07:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH\classes\Model\clients.php [ 67 ] in file:line
2014-08-19 09:07:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:07:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH\classes\Model\clients.php [ 67 ] in file:line
2014-08-19 09:07:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-19 09:20:11 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  повторяющееся значение ключа нарушает ограничение уникальности "client_numb"
DETAIL:  Ключ "(number)=(123456)" уже существует.
CONTEXT:  SQL-оператор: "INSERT INTO clients(
          number,
          name, 
          last_name, 
          email, 
          adress, 
          city,
          country
        )
        VALUES(
          _number,
          _name, 
          _last_name, 
          _email, 
          _adress, 
          _city,
          _country
        
        )"
функция PL/pgSQL add_client(integer,character varying,character varying,character varying,character varying,character varying,character varying), строка 3, оператор SQL-оператор [ SELECT * FROM add_client(123456,'numele','familia','email@email.com','adressa mea','satulmeu','tsaramea') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 09:20:11 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(68): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(110): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 09:32:27 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: ",")
LINE 1: SELECT * FROM add_client(,'','','','','','')
                                 ^ [ SELECT * FROM add_client(,'','','','','','') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 09:32:27 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(67): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(110): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 09:32:28 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: ",")
LINE 1: SELECT * FROM add_client(,'','','','','','')
                                 ^ [ SELECT * FROM add_client(,'','','','','','') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 09:32:28 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM a...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(67): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(110): Model_Clients->add_client(Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-19 17:05:05 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Main.php [ 141 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:141
2014-08-19 17:05:05 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(141): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\OpenServer\d...', 141, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:141