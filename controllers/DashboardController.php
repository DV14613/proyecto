<?php
require_once 'config/parametros.php';

class DashboardController
{
    public function login(){
       require_once 'views/layouts/login.php';
    }  
    public function dashboard(){
        require_once 'views/layouts/dashboard.php';
    }  
    /* Gestion Clientes */
    public function RegistrarCliente(){
        require_once 'views/layouts/clientes/RegistrarCliente.php';
    }
    public function ModificarCliente(){
        require_once 'views/layouts/clientes/ModificarCliente.php';
    }
    public function ConsultarCliente(){
        require_once 'views/layouts/clientes/ConsultarCliente.php';
    }
    /* Gestion Servicios facturados */
    public function RegistrarServicio(){
        require_once 'views/layouts/servicios/RegistrarServicio.php';
    }
    public function ModificarServicio(){
        require_once 'views/layouts/servicios/ModificarServicio.php';
    }
    public function ConsultarServicio(){
        require_once 'views/layouts/servicios/ConsultarServicio.php';
    }
    public function otros(){
        require_once 'views/layouts/otros.php';
    }

}
?>