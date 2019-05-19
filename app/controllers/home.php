<?php

class Home extends Controller
{
    public function index($name)
    {
        print_r($name);
        $user       = $this->model('User');
        $user->name = $name[1];
        $this->view('home/index', $name);
    }

    public function homie($name = '', $other = '')
    {
        echo $name . ' ' . $other;
        //print_r($params);
    }
}
