<?php


/**
 * Created by PhpStorm.
 * User: mert
 * Date: 12/20/15
 * Time: 7:26 AM
 */
class Config
{
    public function __construct()
    {
        $this->init(require_once __DIR__ . '/../config.php');
    }


    /**
     * сейчас через него инициализируются константы, но потом можно сделать больше
     *
     * @param array $config
     * @throws
     */
    public function init(array $config)
    {
        \di\App::get()->set('test', [
            'class' => \Controller\Test::class,
            0 => 'Первый параметр',
            1 => 'Второй параметр'
        ]);
    }

}