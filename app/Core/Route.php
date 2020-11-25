<?php
    
    namespace App\Core;

    class Route
    {

        private static $routes                  = Array();
        private static $namespace               = 'App\Controllers';
        private static $pathNotFound            = null;
        private static $methodNotAllowed        = null;

        public static function add($expression, $function, $method_function = 'index', $method = 'get')
        {
            array_push(self::$routes, Array(
                'expression'                    => $expression,
                'function'                      => $function,
                'method_function'               => $method_function,
                'method'                        => $method
            ));
        }

        public static function pathNotFound($function)
        {
            self::$pathNotFound                 = $function;
        }

        public static function methodNotAllowed($function)
        {
            self::$methodNotAllowed             = $function;
        }

        public static function parseURL()
        {
            if(isset($_GET['url']))
            {
                // Ngilangin / yang ada di akhir
                $url                            = rtrim($_GET['url'], '/');

                // Nglilangin huruf ajaib
                $url                            = filter_var($url, FILTER_SANITIZE_URL);

                // Ngubah Url ke bentuk array
                $url                            = explode('/', $url);

                return $url;
            }
        }

        public static function run($basepath    = '/')
        {

            // Parse current url
            $parsed_url                         = self::parseURL();//Parse Uri

            if($parsed_url !== null)
            {
                $path                           = implode('/',$parsed_url);

                $path                           = '/' . $path;
            }
            else
            {
                $path                           = '/';
            }

            // Get current request method
            $method                             = $_SERVER['REQUEST_METHOD'];

            // Status route
            $route_match_found                  = false;

            // Cek route 
            foreach(self::$routes as $route)
            {
                if($route['expression']         === $path)
                {
                    // Cek method match
                    if(strtolower($method)      === strtolower($route['method']))
                    {
                        $route_match_found      = true;

                        // Matching route was found
                        $controller             = $route['function'];

                        // Chek string \
                        if(stristr($route['function'], '\\') === false)
                        {
                            $controller         = "\\{$route['function']}";
                        }

                        // Controller + namespace
                        $controller             = self::$namespace . $controller;

                        // Check class
                        if(class_exists($controller))
                        {
                            if(method_exists($controller, $route['method_function']))
                            {
                                $method         = $route['method_function'];
                            }

                            // Call class
                            call_user_func_array([  $controller, 
                                        $method   ],

                                        []);
                        }

                        // Do not check other routes
                        break;
                    }
                }
            }

            // No matching route was found
            if(!$route_match_found)
            {
                header("HTTP/1.0 404 Not Found");

                // Method not match
                if(self::$methodNotAllowed)
                {
                    var_dump(self::$methodNotAllowed);
                    var_dump(Array($path,$method));
                }

                if(self::$pathNotFound)
                {
                    var_dump(self::$pathNotFound);
                    var_dump(Array($path));
                }
            }

        }

    }
