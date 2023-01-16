<?php
declare(strict_types=1);
class Route
{
    static function start()
    {

        // controller and default actions
        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // gets controller name
        if (!empty($routes[2]) )
	{
            if (strpos($routes[2], '?page=') !== false)
            {
                $routeWithGetParam = explode('?page=', $routes[2]);
                $controller_name = $routeWithGetParam[0];
		$pageNumber = $routeWithGetParam[1];

                // check if GET page value is number
		if (preg_match("/^[0-9]*$/", $pageNumber))
	       	{
                    $_SESSION['page'] = $pageNumber;
                }
	    }

	    else
	    {
                $controller_name = $routes[2];
            }
        }

        // action name
        if ( !empty($routes[3]) )
	{
                $action_name = $routes[3];
        }

        // adding prefixes
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

        // adding the file with the model class
        $model_file = strtolower($model_name).'.php';
        $model_path = "application/models/".$model_file;
        if (file_exists($model_path))
        {
            include "application/models/".$model_file;
        }

        // adding the file with the controller class
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "application/controllers/".$controller_file;
        if (file_exists($controller_path))
        {
            include "application/controllers/".$controller_file;
        }
        else
        {
            // redirect to the 404 page if any bad url
            Route::ErrorPage404();
        }

        // make a controller
        $controller = new $controller_name;
        $action = $action_name;

        if (method_exists($controller, $action))
        {
            $controller->$action();
        }
        else
        {
            // redirect to the 404 page if any bad url
            Route::ErrorPage404();
        }

    }

    function ErrorPage404()
    {
        $host = 'https://'.$_SERVER['HTTP_HOST'].'/~grebegor/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}
