<?php
/*
Файл подключения фаблонизатора Smarty
*/

$path = dirname(realpath(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', $path . DS);
define('LIB_PATH', APP_PATH . 'library' . DS);
define('TMP_PATH', APP_PATH . 'application' . DS . 'smarty' . DS . 'template' . DS);
define('COMP_PATH', APP_PATH . 'application' . DS . 'smarty' . DS . 'com' . DS);
define('CONFIG_PATH', APP_PATH . 'application' . DS . 'smarty' . DS . 'config' . DS);
define('CACHE_PATH', APP_PATH . 'application' . DS . 'smarty' . DS . 'cache' . DS);


require_once LIB_PATH . 'Autoloader.php';

class MySmarty
{
    public $smarty;
    public $template; //выбираем шаблон
    public function getSmarty()
    {
        $this->template = 'default'; //по умолчанию шаблон default
        define('TemplateWebPath', "{$this->template}/");
        Smarty_Autoloader::register();
        //инициализация шаблона Smarty
        $this->smarty = new Smarty();
        $this->smarty->template_dir = TMP_PATH;
        $this->smarty->compile_dir = COMP_PATH;
        $this->smarty->config_dir = CONFIG_PATH;
        $this->smarty->cache_dir = CACHE_PATH;

        $this->smarty->assign('templateWebPath', TemplateWebPath);
        return $this->smarty;
    }
}