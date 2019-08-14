<?php
namespace core;
use database\Db;
use core\Model;
class Controller
{
    public $model;       //модель
    public $loadTemplate;//загрузка шаблона

    public function __construct()
    {
    }
 
    /**
     * Получить подпункты меню
     *
     * @return array массив данных
     */
    static function get_item_menu(){
        $sql = "SELECT * FROM menu";
        $query = Db::get_connection()->query($sql);
        $rs = [];
        while ($row = $query->fetch_assoc()) {
            $rs[] = $row;
        }
        return $rs;
    }
}