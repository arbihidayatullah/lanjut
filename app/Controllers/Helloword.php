<?php

namespace App\Controllers;

class Helloword extends BaseController
{

    public function index($name, $npm)
    {
        //echo $this->name;
        echo $name . "<br>";
        echo $npm . "<br>";
        //echo "hello arbi";

        //return view('welcome_message)
    }
    public function show()
    {
        echo "Arbi Hidayatullah";
        echo "1817051045";
    }
}
