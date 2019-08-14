<?php
namespace models;
use database\Db;
use mf\Main_Function;
use core\Model;
/*
 * Модель вопросов
 */
class Model_Question extends Model
{
    /**
     * Получить массив данных страницы пагинации
     * @param $page_id
     * @param $number_of_divider
     * @return array|bool массив данных, false в случае неудачи
     */
    public function get_pagination_array($page_id, $number_of_divider)
    {
        $number_limit = ($page_id - 1)*$number_of_divider;

        $sql = "SELECT * FROM questions LIMIT " . $number_limit . ", " . $number_of_divider;

        $query = Db::get_connection()->query($sql);
        return Main_Function::create_smarty_rs_array($query);
    }

    /**
     * получить колличество вопросов
     *
     * @return int число строк в запросе
     */
    public function get_row()
    {
        $sql = "SELECT * FROM questions";
        $query = Db::get_connection()->query($sql);
        $pagination_row = $query->num_rows;
        return $pagination_row;
    }
}