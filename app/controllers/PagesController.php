<?php


class PagesController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'Título de la página'
        ];
        $this->view('pages/index', $data);
    }
}