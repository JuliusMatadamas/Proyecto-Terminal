<?php


class Core
{
    protected $currentController = 'PagesController';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl (); // llamar al método getUrl para obtener la url

        /**
         * Si existe la url, se comprueba si el elemento de la posición 0 corresponde a un controlador
         * existente, si existe, se define como el controlador actual, de lo contrario, se define el
         * controlador actual como NotFoundController, de no existir la url, el controlador por defecto
         * seguira siendo PagesController
         */
        if ($url)
        {
            if ( file_exists('../app/controllers/' . ucwords (strtolower($url[0])) . 'Controller.php') )
            {
                $this->currentController = ucwords (strtolower($url[0])) . 'Controller';
            }
            else
            {
                $this->currentController = 'NotFoundController';
            }
            unset($url[0]); // Se elimina el elemento de la posición 0
        }

        // Se requiere el controlador
        require_once 'app/controllers/' . $this->currentController . '.php';

        // Se instancia el controlador
        $this->currentController = new $this->currentController;

        /**
         * Si existe la url y esta tiene un elemento en la posición 1, se verifica que exista el método
         * en el controlador actual, de existir, se define como el método actual
         */
        if ($url && isset($url[1]))
        {
            if (method_exists($this->currentController, $url[1]))
            {
                $this->currentMethod = $url[1];
            }
            unset($url[1]); // Se elimina el elemento de la posición 1
        }

        /**
         * Si existe la url y esta contiene elementos, se obtienen los valores y se pasan a la propiedad
         * params, de lo contrario se deja esta como un array vacío
         */
        if ($url)
        {
            $this->params = $url ? array_values($url) : [];
        }

        // Se ejecuta el método del controlador y se pasan los parámetros
        call_user_func_array ([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url']))
        {
            $url = rtrim($_GET['url'], '/'); // Eliminar la última barra en caso de haberla
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}