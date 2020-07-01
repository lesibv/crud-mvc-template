<?php

/**
 *
 */
class Router
{
    public static function route()
    {
        require BASE_PATH . '/app/routes.php';

        $request = trim($_SERVER['REQUEST_URI']);

        if (array_key_exists($request, routes)) {
            $controller = routes[$request][0];
            $method = routes[$request][1];
            if (file_exists(BASE_PATH . '/app/controllers/' . $controller . '.php')) {
                require BASE_PATH . '/app/controllers/' . $controller . '.php';
                $class = new $controller();
                if (method_exists($controller, $method)) {
                    $class->$method();
                    exit;
                }
            }
        }

        http_response_code(404);
        include BASE_PATH . '/app/views/not_found.php';
    }
}
