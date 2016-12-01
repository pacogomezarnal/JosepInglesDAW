<?php

include 'ia.php';

//Creamos el objeto de nuestra IA
$objetogenerado= new IA();

//Cambiamos el numero de columnas y filas de nuestro objeto creado
$objetogenerado->setMapaCol(4);
$objetogenerado->setMapaFil(2);

public function setMapaCol($tipoNaveIADefecto){
  $this->tipoNaveIADefecto = $tipoNaveIADefecto;
}

public function getMapaCol(){
 return $this->$tipoNaveIADefecto;

 public function setMapaFil($tipoNaveIADefecto){
   $this->tipoNaveIADefecto = $tipoNaveIADefecto;
 }

 public function getMapaFil(){
  return $this->$tipoNaveIADefecto;

//colocar el tipoNaveIADefecto al valor ”” para comprobar el valor asignado es “nave”

//Setter mapaCol
public function setMapaCol($tipoNaveIADefecto){
  $this->tipoNaveIADefecto = $tipoNaveIADefecto;
}

//GetterMapaCol
public function getMapaCol(){
 return $this->$tipoNaveIADefecto;

//SetterMapaFil
 public function setMapaFil($tipoNaveIADefecto){
   $this->tipoNaveIADefecto = $tipoNaveIADefecto;
 }

 //Getter MapaFil
 public function getMapaFil(){
  return $this->$tipoNaveIADefecto;

//Insertamos 2 nuevas naves IA
$objetogenerado->setNaveIA("nodriza",3,1);
$objetogenerado->setNaveIA("nave",0,1);

$this->$imprimirNavesIA(); //Utilizar metodo creado anteriormente (imprimirNavesIA)


?>
