<?php


class PagesController extends Controller
{
    public function __construct()
    {
        $this->empleadoModel = $this->model('Empleado');
    }

    public function index()
    {
        $empleados = $this->empleadoModel->getEmpleado();

        $data = [
            'title' => 'Título de la página',
            'empleados' => $empleados
        ];

        $this->view('pages/index', $data);
    }
}