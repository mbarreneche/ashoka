<?php


require_once("perfil.php");



class DbMySql {
  protected $connection;

  public function __construct()
  {

    $dsn = "mysql:107.180.21.53;dbname=ashoka_db;port=3306";
    $user = "admin";
    $pass = "Zapiola1451";

    try {
      $this->connection = new PDO($dsn, $user, $pass);

      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (\Exception $e) {

      echo $e->getMessage();
      exit;
    }
  }

  public function guardarPerfil($perfil){

    $stmt = $this->connection->prepare("INSERT INTO perfiles VALUES(default, :responsable, :pais, :nombre, :apellido, :bajada, :categoria, :subcategoria, :resumen, :historia, :rol, :org_fund, :foco, :influencia, :replicacion, :cambio_perspectiva, :empoderamiento, :cambios_economicos, :politicas_publicas, :frase_nueva, :foto)");

    $stmt->bindValue(":responsable", $perfil->getResponsable());
    $stmt->bindValue(":pais", $perfil->getPais());
    $stmt->bindValue(":nombre", $perfil->getNombre());
    $stmt->bindValue(":apellido", $perfil->getApellido());
    $stmt->bindValue(":bajada", $perfil->getBajada());
    $stmt->bindValue(":categoria", $perfil->getCategoria());
    $stmt->bindValue(":subcategoria", $perfil->getSubcategoria());
    $stmt->bindValue(":resumen", $perfil->getResumen());
    $stmt->bindValue(":historia", $perfil->getHistoria());
    $stmt->bindValue(":rol", $perfil->getRol());
    $stmt->bindValue(":org_fund", $perfil->getOrg_fund());
    $stmt->bindValue(":foco", $perfil->getFoco());
    $stmt->bindValue(":influencia", $perfil->getInfluencia());
    $stmt->bindValue(":replicacion", $perfil->getReplicacion());
    $stmt->bindValue(":cambio_perspectiva", $perfil->getCambio_perspectiva());
    $stmt->bindValue(":empoderamiento", $perfil->getEmpoderamiento());
    $stmt->bindValue(":cambios_economicos", $perfil->getCambios_economicos());
    $stmt->bindValue(":politicas_publicas", $perfil->getPoliticas_publicas());
    $stmt->bindValue(":frase_nueva", $perfil->getFrase_nueva());
    $stmt->bindValue(":foto", $perfil->getFoto());
    $stmt->execute();

  }

  public function perfilesRandom() {

    $stmt = $this->connection->prepare("SELECT * FROM perfiles ORDER BY RAND() LIMIT 9");
    $stmt->execute();

    while ($perfilesArray = $stmt->fetch(PDO::FETCH_ASSOC)) { 

    $perfiles[] = new Perfil($perfilesArray);
  }
    return $perfiles;
  
  }

  function lastId() {
    /* global $db; */
    $stmt = $this->connection->prepare("SELECT * FROM perfiles ORDER BY id DESC");
    $stmt->execute();
    $consulta = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($consulta == false){
      return NULL;
    } else {
      $perfil = new Perfil($consulta);
      return $perfil;
    }
  }

  function buscarId($id) {
    /* global $db; */
    $stmt = $this->connection->prepare("SELECT * FROM perfiles WHERE id = :id");
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    $consulta = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($consulta == false){
      return NULL;
    } else {
      $perfil = new Perfil($consulta);
      return $perfil;
    }
  }

  function updateFoto($id, $foto) {
    /* global $db; */
    $stmt = $this->connection->prepare("UPDATE perfiles SET foto = :foto WHERE id = :id ");
    $stmt->bindValue(":id", $id);
    $stmt->bindValue(":foto", $foto);
    $stmt->execute();

  }

  function buscarCategoria($categoria) {
    /* global $db; */
    $stmt = $this->connection->prepare("SELECT * FROM perfiles WHERE categoria = :categoria");
    $stmt->bindValue(":categoria", $categoria);
    $stmt->execute();
    while ($perfilesCategoria = $stmt->fetch(PDO::FETCH_ASSOC)) { 

      $perfiles[] = new Perfil($perfilesCategoria);
    }
      return $perfiles;
    
    }

}