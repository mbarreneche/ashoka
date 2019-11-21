<?php

class perfil {

  protected $id;
  protected $responsable;
  protected $pais;
  protected $nombre;
  protected $apellido;
  protected $bajada;
  protected $categoria;
  protected $subcategoria;
  protected $resumen;
  protected $historia;
  protected $rol;
  protected $org_fund;
  protected $foco;
  protected $influencia;
  protected $replicacion;
  protected $cambio_perspectiva;
  protected $empoderamiento;
  protected $cambios_economicos;
  protected $politicas_publicas;
  protected $frase_nueva;
  protected $foto;

  function __construct(Array $datos){

    if(isset($datos["id"])){
        $this->id = $datos["id"];
      } else {
        $this->id = NULL;}
        $this->responsable = $datos["responsable"];
        $this->pais = $datos["pais"];
        $this->nombre = $datos["nombre"];
        $this->apellido = $datos["apellido"];
        $this->bajada = $datos["bajada"];
        $this->categoria = $datos["categoria"];
        $this->subcategoria = $datos["subcategoria"];
        $this->resumen = $datos["resumen"];
        $this->historia = $datos["historia"];
        $this->rol = $datos["rol"];
        $this->org_fund = $datos["org_fund"];
        $this->foco = $datos["foco"];
        $this->influencia = $datos["influencia"];
        $this->replicacion = $datos["replicacion"];
        $this->cambio_perspectiva = $datos["cambio_perspectiva"];
        $this->empoderamiento = $datos["empoderamiento"];
        $this->cambios_economicos = $datos["cambios_economicos"];
        $this->politicas_publicas = $datos["politicas_publicas"];
        $this->frase_nueva = $datos["frase_nueva"];
        if (isset($datos["foto"])){
          $this->foto = $datos["foto"];
        } else {
          $this->foto = null;
        }
      }

      public function getId(){
        return $this->id;
      }
      public function setId($id){
        $this->id=$id;
        return $this;
      }
      public function getResponsable(){
        return $this->responsable;
      }
      public function setResponsable($responsable){
        $this->responsable=$responsable;
        return $this;
      }
      public function getPais(){
        return $this->pais;
      }
      public function setPais($pais){
        $this->pais=$pais;
        return $this;
      }
      public function getNombre(){
        return $this->nombre;
      }
      public function setNombre($nombre){
        $this->nombre=$nombre;
        return $this;
      }
      public function getApellido(){
        return $this->apellido;
      }
      public function setApellido($apellido){
        $this->apellido=$apellido;
        return $this;
      }
      public function getBajada(){
        return $this->bajada;
      }
      public function setBajada($bajada){
        $this->bajada=$bajada;
        return $this;
      }
      public function getCategoria(){
        return $this->categoria;
      }
      public function setCategoria($categoria){
        $this->categoria=$categoria;
        return $this;
      }
      public function getSubcategoria(){
        return $this->subcategoria;
      }
      public function setSubcategoria($subcategoria){
        $this->subcategoria=$subcategoria;
        return $this;
      }
      public function getResumen(){
        return $this->resumen;
      }
      public function setResumen($resumen){
        $this->resumen=$resumen;
        return $this;
      }
      public function getHistoria(){
        return $this->historia;
      }
      public function setHistoria($historia){
        $this->historia=$historia;
        return $this;
      }
      public function getRol(){
        return $this->rol;
      }
      public function setRol($rol){
        $this->rol=$rol;
        return $this;
      }
      public function getOrg_fund(){
        return $this->org_fund;
      }
      public function setOrg_fund($org_fund){
        $this->org_fund=$org_fund;
        return $this;
      }
      public function getFoco(){
        return $this->foco;
      }
      public function setFoco($foco){
        $this->foco=$foco;
        return $this;
      }
      public function getInfluencia(){
        return $this->influencia;
      }
      public function setInfluencia($influencia){
        $this->influencia=$influencia;
        return $this;
      }
      public function getReplicacion(){
        return $this->influencia;
      }
      public function setReplicacion($replicacion){
        $this->replicacion=$replicacion;
        return $this;
      }
      public function getCambio_perspectiva(){
        return $this->cambio_perspectiva;
      }
      public function setCambio_perspectiva($cambio_perspectiva){
        $this->cambio_perspectiva=$cambio_perspectiva;
        return $this;
      }
      public function getEmpoderamiento(){
        return $this->empoderamiento;
      }
      public function setEmpoderamiento($empoderamiento){
        $this->empoderamiento=$empoderamiento;
        return $this;
      }
      public function getCambios_economicos(){
        return $this->cambios_economicos;
      }
      public function setCambios_economicos($cambios_economicos){
        $this->cambios_economicos=$cambios_economicos;
        return $this;
      }
      public function getPoliticas_publicas(){
        return $this->politicas_publicas;
      }
      public function setPoliticas_publicas($politicas_publicas){
        $this->politicas_publicas=$politicas_publicas;
        return $this;
      }
      public function getFrase_nueva(){
        return $this->frase_nueva;
      }
      public function setFrase_nueva($frase_nueva){
        $this->frase_nueva=$frase_nueva;
        return $this;
      }
      public function getFoto(){
        return $this->foto;
      }
      public function setFoto($foto){
        $this->foto=$foto;
        return $this;
      }
      
    }




 
