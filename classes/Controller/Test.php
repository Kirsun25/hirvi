<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 15.09.19
 * Time: 11:08
 */

namespace Controller;


class Test
{
    public $first;
    public $second;

    public function __construct($first, $second)
    {
        $this->first = $first;
        $this->second = $second;
    }


    public function test()
    {
        return $this->first . "  " . $this->second;
    }


}