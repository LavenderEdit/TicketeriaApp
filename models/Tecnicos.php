<?php
namespace TicketingSystem\Models;

class Tecnicos {
    public $Nombre;
    public $Telefono;
    public $Email;
    public $TipoUsuario;
    
    public function __construct($Nombre, $Telefono, $Email, $TipoUsuario) {
        $this->Nombre = $Nombre;
        $this->Telefono = $Telefono;
        $this->Email = $Email;
        $this->TipoUsuario = $TipoUsuario;
    }
}
?>