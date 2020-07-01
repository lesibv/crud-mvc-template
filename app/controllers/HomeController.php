<?php
/**
 * Controller for Home page
 */
require BASE_PATH . '/core/Controller.php';

class HomeController extends Controller
{

    function __construct()
    {

    }

    public function index()
    {
        $this->loadView('home.php');
    }
}
