<?php
namespace mf;
use database\Db;
/**
 * Класс общих функций
 */
class Main_Function
{
    /**
     * Загрузка шаблона
     *
     * @param $smarty объект шаблонизатора
     * @param $templateName название файла шаблона
     */
    public function loadTemplate($smarty, $templateName)
    {
        $smarty->display($templateName . '.tpl');
    }

    /**
     * Преобразовывание результата работы функции выборки в асоциативный массив
     *
     * @param $rs - набор строк, результат работы SELECT
     * @return array|bool
     */
    static function create_smarty_rs_array($rs)
    {
        if (!$rs) {
            return false;
        }
        $smartyRs = [];
        while ($row = $rs->fetch_assoc()) {
            $smartyRs[] = $row;
        }
        return $smartyRs;
    }

    /**
     * Редирект
     *
     * @param $url адрес для перенаправления
     */
    static public function redirect($url = '/')
    {
        header("Location: {$url}");
        exit;
    }
}
