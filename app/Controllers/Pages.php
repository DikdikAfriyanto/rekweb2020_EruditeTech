<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('pages/about', $data);
    }

    public function library()
    {
        $data = [
            'title' => 'library'
        ];
        return view('pages/library', $data);
    }
    public function tampil()
    {
        $data = [
            'title' => 'Tampil | BookLibrary'
        ];
        return view('pages/tampil', $data);
    }

    //--------------------------------------------------------------------

}
