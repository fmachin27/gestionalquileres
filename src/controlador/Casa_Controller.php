<?php

use Leandro\app\libs\Controlador;


class Casa_Controller extends Controlador
{
  public function nuevo()
  {
    //echo "con index m index ";
    $valor = "un valor";
    $this->cargarVista("casa/nuevo", $valor);
  }
}