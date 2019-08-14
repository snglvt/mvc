<?php
namespace models;
use database\Db;
use mf\Main_Function;
use core\Model;
/*
 * Модель продукта
 */
class Model_Product extends Model
{

    /**
     * получить данные продукта
     *
     * @param $id id продукта
     * @return array массив данных продукта, false в случае неудачи
     */
    public function get_data($id)
    {
        $sql = "SELECT * FROM image WHERE id_image = " . $id;
        $rs = Db::get_connection()->query($sql);
        $rs = Main_Function::create_smarty_rs_array($rs);
        return $rs;
    }

    /**
     * получить общее колличество продуктов
     *
     * @return колличество строк в результате при успехе или false при неудаче
     */
    public function get_num_rows()
    {
        $sql = "SELECT * FROM image";
        $query = Db::get_connection()->query($sql);
        return $query->num_rows;
    }
}
