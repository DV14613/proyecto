<?php
require_once 'config/parametros.php';

class dashboard_controller
{
    public function login()
    {
       require_once 'views/layouts/login.php';
       
    }  
    public function dashboard()
    {
        require_once 'views/layouts/dashboard.php';
       
    }  
}

?>