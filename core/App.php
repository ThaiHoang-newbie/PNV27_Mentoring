<?php
class App
{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function run()
    {
        $url = $this->parseUrl();

        // controller
        if (isset($url[0]) && $url[0] !== '') {
            if (!preg_match('/^[a-zA-Z][a-zA-Z0-9]*$/', $url[0])) {
                $url[0] = ''; // invalid name, use default controller
            } else {
                $possible = __DIR__ . '/../app/controllers/' . ucfirst($url[0]) . 'Controller.php';
                if (file_exists($possible)) {
                    require_once $possible;
                    $this->controller = ucfirst($url[0]) . 'Controller';
                    unset($url[0]);
                }
            }
        }

        if (!class_exists($this->controller)) {
            // load default controller file
            require_once __DIR__ . '/../app/controllers/HomeController.php';
        }

        $this->controller = new $this->controller();

        // method
        if (isset($url[1])) {
            $blacklist = ['__construct', '__destruct', '__call', '__callStatic', '__get', '__set', '__isset', '__unset', '__sleep', '__wakeup', '__toString', '__invoke', '__set_state', '__clone', '__debugInfo'];
            if (method_exists($this->controller, $url[1]) && !in_array($url[1], $blacklist) && substr($url[1], 0, 1) !== '_') {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    protected function parseUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
