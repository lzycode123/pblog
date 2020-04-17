<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return view('index');
        $aa = $_GET['name'];
        var_dump($aa);
    }
}
