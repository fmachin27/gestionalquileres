<?php

namespace Leandro\app\modelo;

use Exception;
use PDOException;
use Leandro\app\libs\Conexion;

class Casa
{
  private $id;
  private $calle;
  private $numero;

  public function __construct($id, $calle, $numero)
  {
    $this->id = $id;
    $this->calle = $calle;
    $this->setNumero($numero);
  }

  public function listar()
  {
    $lista[] = new Persona("Diego", "Forlan", 45);
    $lista[] = new Persona("Ana", "Clara", 22);
    $lista[] = new Persona("Lucas", "Paqueta", 78);
    return $lista;
  }

  /**
   * Get the value of nombre
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the value of apellido
   */
  public function getCalle()
  {
    return $this->calle;
  }
  public function setCalle($calle)
  {
    $this->calle = $calle;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setNumero($numero)
  {
    if ($numero < 0) {
      throw new Exception("El numero debe ser mayor que 0");
    }
    $this->numero = $numero;
  }

  public function crear()
  {
    $pdo = null;
    $query = null;
    $pdo = Conexion::getConexion()->getPdo();
    $id = -1;
    try {
      $query      = $pdo->prepare('INSERT INTO casa (calle, numero)
       VALUES (:calle, :num)');
      $query->bindParam(':calle', $this->calle);
      $query->bindParam(':num', $this->numero);
      if ($query->execute()) {
        $id = $pdo->lastInsertId();
      }
      return $id;
    } catch (PDOException $th) {
      //throw $th;
    } finally {
      $pdo = null;
    }
  }
}