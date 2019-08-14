<?php
namespace database;
use mysqli;
/**
 * Класс работы с базой данных
 */
class Db
{
    /**
     * Метод поключения к базе данных
     *
     * @return mysqli
     */
    public static function get_connection()
    {

        $host = '127.0.0.1';
        $user_name = 'root';
        $db_name = 'mvc2';
        $password = '';
        //инициируем новое подключение
        $db = new mysqli($host, $user_name, $password, $db_name);
        // в случае ошибки поключения, вывести описание ошибки
        if ($db->connect_errno) {
            printf("Не удалось подключиться: %s\n", $db->connect_error);
            exit();
        }
        //устанавливаем кодировку
        $db->set_charset('utf8');
        return $db;
    }
}


















