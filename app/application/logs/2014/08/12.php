<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-12 03:27:32 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Request::$method ~ APPPATH\classes\Controller\news.php [ 13 ] in file:line
2014-08-12 03:27:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 03:29:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\Model\news.php [ 19 ] in file:line
2014-08-12 03:29:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 03:31:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\Model\news.php [ 19 ] in file:line
2014-08-12 03:31:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 03:31:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Model\news.php [ 20 ] in file:line
2014-08-12 03:31:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 03:31:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function check() on a non-object ~ APPPATH\classes\Controller\news.php [ 17 ] in file:line
2014-08-12 03:31:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 03:35:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function check() on a non-object ~ APPPATH\classes\Controller\news.php [ 17 ] in file:line
2014-08-12 03:35:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 03:39:32 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Clients::$_db ~ APPPATH\classes\Model\clients.php [ 10 ] in D:\OpenServer\domains\test\application\classes\Model\clients.php:10
2014-08-12 03:39:32 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Model\clients.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 10, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\application\classes\Model\clients.php:10
2014-08-12 03:39:53 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Clients::$db ~ APPPATH\classes\Model\clients.php [ 10 ] in D:\OpenServer\domains\test\application\classes\Model\clients.php:10
2014-08-12 03:39:53 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Model\clients.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OpenServer\d...', 10, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\application\classes\Model\clients.php:10
2014-08-12 03:44:05 --- CRITICAL: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ОШИБКА:  ошибка синтаксиса (примерное положение: "$")
LINE 1: SELECT * FROM $table
                      ^ [ SELECT * FROM $table ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-12 03:44:05 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM $...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(11): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-12 03:44:19 --- CRITICAL: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ОШИБКА:  ошибка синтаксиса (примерное положение: "{")
LINE 1: SELECT * FROM {$table}
                      ^ [ SELECT * FROM {$table} ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-12 03:44:19 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM {...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(11): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-12 03:44:59 --- CRITICAL: Database_Exception [ 42601 ]: SQLSTATE[42601]: Syntax error: 7 ОШИБКА:  ошибка синтаксиса (примерное положение: "'clients'")
LINE 1: SELECT * FROM 'clients'
                      ^ [ SELECT * FROM 'clients' ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 151 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-12 03:44:59 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM '...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-12 03:50:16 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant admin - assumed 'admin' ~ APPPATH\config\database.php [ 29 ] in D:\OpenServer\domains\test\application\config\database.php:29
2014-08-12 03:50:16 --- DEBUG: #0 D:\OpenServer\domains\test\application\config\database.php(29): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\OpenServer\d...', 29, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\Core.php(829): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\Config\File\Reader.php(49): Kohana_Core::load('D:\OpenServer\d...')
#3 D:\OpenServer\domains\test\system\classes\Kohana\Config.php(130): Kohana_Config_File_Reader->load('database')
#4 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Config->load('database')
#5 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#6 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#7 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#8 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#9 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\test\application\config\database.php:29
2014-08-12 03:50:31 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:50:31 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM '...', false, Array)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:52:11 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:52:11 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM '...', false, Array)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:52:12 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:52:12 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM '...', false, Array)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:53:59 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:53:59 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM '...', false, Array)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:54:00 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:54:00 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM '...', false, Array)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:54:01 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:54:01 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM '...', false, Array)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:54:01 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:54:01 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM '...', false, Array)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:54:01 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:54:01 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM '...', false, Array)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:54:01 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:54:01 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM '...', false, Array)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-12 03:55:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:55:30 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:18 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:19 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:20 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:20 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:21 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:22 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:23 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:23 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:23 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:23 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 03:59:24 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:04:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:04:24 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:04:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:04:25 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:04:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:04:26 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:05:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:05:30 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:05:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:05:30 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:05:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:05:37 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:05:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:05:38 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:07:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:07:43 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:07:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:07:44 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:07:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:07:44 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:07:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:07:44 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:08:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:08:25 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:08:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:08:25 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:08:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ MODPATH\database\classes\Kohana\Database.php [ 65 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:08:26 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\OpenServer\d...', 65, Array)
#1 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(220): Kohana_Database::instance(NULL)
#2 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#4 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database.php:65
2014-08-12 04:10:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_Pgsql' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-08-12 04:10:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 04:11:18 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "'clients'")
LINE 1: SELECT * FROM 'clients'
                      ^ [ SELECT * FROM 'clients' ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-12 04:11:18 --- DEBUG: #0 D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM '...', false, Array)
#1 D:\OpenServer\domains\test\application\classes\Model\clients.php(12): Kohana_Database_Query->execute()
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(17): Model_Clients->get_all_clients()
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\test\modules\database\classes\Kohana\Database\Query.php:251
2014-08-12 04:16:47 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\Controller\Main.php [ 20 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:20
2014-08-12 04:16:47 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(20): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\OpenServer\d...', 20, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:20
2014-08-12 04:16:54 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\Controller\Main.php [ 20 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:20
2014-08-12 04:16:54 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(20): Kohana_Core::error_handler(2, 'Illegal offset ...', 'D:\OpenServer\d...', 20, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:20
2014-08-12 04:22:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH, expecting ',' or ';' ~ APPPATH\views\template.php [ 110 ] in file:line
2014-08-12 04:22:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 04:24:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: all_client ~ APPPATH\classes\Controller\Main.php [ 26 ] in D:\OpenServer\domains\test\application\classes\Controller\Main.php:26
2014-08-12 04:24:26 --- DEBUG: #0 D:\OpenServer\domains\test\application\classes\Controller\Main.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 26, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#2 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\domains\test\application\classes\Controller\Main.php:26
2014-08-12 04:31:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 110 ] in D:\OpenServer\domains\test\application\views\template.php:110
2014-08-12 04:31:12 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\template.php(110): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 110, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\test\application\views\template.php:110
2014-08-12 07:26:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH\views\template.php [ 114 ] in file:line
2014-08-12 07:26:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 07:32:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\template.php [ 119 ] in file:line
2014-08-12 07:32:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 07:32:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH\views\template.php [ 119 ] in file:line
2014-08-12 07:32:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 07:33:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH\views\template.php [ 114 ] in file:line
2014-08-12 07:33:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 07:33:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\template.php [ 119 ] in file:line
2014-08-12 07:33:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 07:55:04 --- CRITICAL: View_Exception [ 0 ]: The requested view clients/table could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-08-12 07:55:04 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\View.php(137): Kohana_View->set_filename('clients/table')
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(30): Kohana_View->__construct('clients/table', NULL)
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(19): Kohana_View::factory('clients/table')
#3 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#4 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\test\system\classes\Kohana\View.php:137
2014-08-12 07:59:16 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_View::bind(), called in D:\OpenServer\domains\test\application\classes\Controller\Main.php on line 20 and defined ~ SYSPATH\classes\Kohana\View.php [ 314 ] in D:\OpenServer\domains\test\system\classes\Kohana\View.php:314
2014-08-12 07:59:16 --- DEBUG: #0 D:\OpenServer\domains\test\system\classes\Kohana\View.php(314): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\OpenServer\d...', 314, Array)
#1 D:\OpenServer\domains\test\application\classes\Controller\Main.php(20): Kohana_View->bind(Array)
#2 D:\OpenServer\domains\test\application\classes\Controller\Main.php(9): Controller_Main->_allClients()
#3 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OpenServer\domains\test\system\classes\Kohana\View.php:314
2014-08-12 08:09:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\template.php [ 109 ] in file:line
2014-08-12 08:09:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 09:51:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Model\clients.php [ 11 ] in file:line
2014-08-12 09:51:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 09:53:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Model\clients.php [ 11 ] in file:line
2014-08-12 09:53:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 09:53:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Model\clients.php [ 11 ] in file:line
2014-08-12 09:53:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 09:53:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Model\clients.php [ 11 ] in file:line
2014-08-12 09:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 09:53:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Model\clients.php [ 11 ] in file:line
2014-08-12 09:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 09:53:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Model\clients.php [ 11 ] in file:line
2014-08-12 09:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 09:53:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Model\clients.php [ 11 ] in file:line
2014-08-12 09:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 10:13:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\client\edit.php [ 1 ] in D:\OpenServer\domains\test\application\views\client\edit.php:1
2014-08-12 10:13:49 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 1, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:1
2014-08-12 10:14:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: validator ~ APPPATH\views\client\edit.php [ 13 ] in D:\OpenServer\domains\test\application\views\client\edit.php:13
2014-08-12 10:14:22 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 13, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:13
2014-08-12 10:14:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: validator ~ APPPATH\views\client\edit.php [ 16 ] in D:\OpenServer\domains\test\application\views\client\edit.php:16
2014-08-12 10:14:41 --- DEBUG: #0 D:\OpenServer\domains\test\application\views\client\edit.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\OpenServer\d...', 16, Array)
#1 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#2 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#3 D:\OpenServer\domains\test\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\OpenServer\domains\test\application\views\template.php(109): Kohana_View->__toString()
#5 D:\OpenServer\domains\test\system\classes\Kohana\View.php(61): include('D:\OpenServer\d...')
#6 D:\OpenServer\domains\test\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\OpenServer\d...', Array)
#7 D:\OpenServer\domains\test\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\test\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 D:\OpenServer\domains\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\test\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\test\application\views\client\edit.php:16
2014-08-12 10:15:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH\classes\Controller\Main.php [ 31 ] in file:line
2014-08-12 10:15:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-12 10:16:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Main.php [ 32 ] in file:line
2014-08-12 10:16:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line