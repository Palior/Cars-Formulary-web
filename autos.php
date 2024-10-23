<?php
class Auto{
private $matricula;
private $serialMotor;
private $serialCarroceria;
private $marca;
private $modelo;
private $anio;
private $color;
private $precio;
}
public function setMatricula($matricula){
$this->matricula=$matricula;
}
public function getMatricula(){
return $this->matricula;
}
public function setSerialMotor($serialMotor){
$this->serialMotor=$serialMotor;
}
public function getSerialMotor(){
return $this->serialMotor;
}
public function setSerialCarroceria($serialCarroceria){
$this->serialCarroceria=$serialCarroceria;
}
public function getSerialCarroceria(){
return $this->serialCarroceria;
}
public function setMarca($marca){
$this->marca=$marca;
}
public function getMarca(){
return $this->marca;
}
public function setModelo($modelo){
$this->modelo=$modelo;
}
public function getModelo(){
return $this->modelo;
}
public function setAnio($anio){
$this->anio=$anio;
}
public function getAnio(){
return $this->anio;
}
public function setColor($color){
$this->color=$color;
}
public function getColor(){
return $this->color;
}
public function setPrecio($precio){
$this->precio=$precio;
}
public function getPrecio(){
return $this->precio;
}
$matricula=$_POST['matricula'];
$serialMotor=$_POST['serialMotor'];
$serialCarroceria=$_POST['serialCarroceria'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$anio=$_POST['anio'];
$color=$_POST['color'];
$precio=$_POST['precio'];
$objetoAuto = new Auto();
$objetoAuto->setMatricula($matricula);
$objetoAuto->setSerialMotor($serialMotor);
$objetoAuto->setSerialCarroceria($serialCarroceria);
$objetoAuto->setMarca($marca);
$objetoAuto->setModelo($modelo);
$objetoAuto->setAnio($anio);
$objetoAuto->setColor($color);
$objetoAuto->setPrecio($precio);
echo("<br/><br/>")
echo("Matricula: ".$objetoAuto->getMatricula()."<br/>");
echo("serialMotor: ".$objetoAuto->getSerialMotor()."<br/>");
echo("serialCarroceria: ".$objetoAuto->getSerialCarroceria()."<br/>");
echo("marca: ".$objetoAuto->getMarca()."<br/>");
echo("modelo: ".$objetoAuto->getModelo()."<br/>");
echo("anio: ".$objetoAuto->getAnio()."<br/>");
echo("color: ".$objetoAuto->getColor()."<br/>");
echo("precio: ".$objetoAuto->getPrecio()."<br/>");
?>