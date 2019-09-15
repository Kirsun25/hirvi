<?php
/**
 * Created by PhpStorm.
 * User: mert
 * Date: 12/20/15
 * Time: 8:13 AM
 */

namespace Controller;

use di\App;

class Testik extends \Controller
{
    /**
     * @return string
     */
    public function actionPage()
    {
        return $this->view('page', ['date' => date('c')]);
    }

    public function actionTest()
    {
        $var = App::get()->get('test')->test();

        return $this->view('temp', ['var' => $var]);
    }

    public function actionNew()
    {
        $var = App::get()->get('test')->test();

        return $this->view('temp', ['var' => $var]);
    }

    /**
     * @param $pr
     * @return string
     */
    public function actionIndex($pr = 'default value for $pr')
    {
        $this->appendTitle('index page');
        $this->setLayout('coral');
        $this->registerCss('/css/testik/white_text.css');
        $this->registerJs('/js/testik/chtoto.js');

        return $this->view('index', ['name' => $pr]);
    }


    /**
     *
     */
    protected function initBaseStatic()
    {
        $this->registerCss('//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
        $this->registerCss('/css/main.css');
        $this->registerJs('/js/main.js');
    }

}