<?php
class HomeModel extends MainModel
{
public function lista(){
$sql="SELECT * FROM movimen";
$retorno=$this->db->query($sql, null);
While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
$resultado[]=$item;
}
return $resultado;
}

public function data(){
$sql="SELECT DISTINCT date FROM movimen";
$retorno=$this->db->query($sql, null);
While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
$resultado[]=$item;
}
return $resultado;
}

public function _input(){
$sql="SELECT value,date FROM movimen m WHERE data= m.date AND type='input'";
$retorno=$this->db->query($sql, null);
While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
$resultado[]=$item;
}
return $resultado;
}

public function _output(){
$sql="SELECT value,date FROM movimen a WHERE data= a.data AND type='output'";
$retorno=$this->db->query($sql, null);
While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
$resultado[]=$item;
}
return $resultado;
}

public function _tinput(){
$sql="SELECT SUM(value) FROM movimen a WHERE data= a.data AND type='input'";
$retorno=$this->db->query($sql, null);
While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
$resultado[]=$item;
}
return $resultado;
}

public function _toutput(){
$sql="SELECT SUM(value) FROM movimen a WHERE data= a.data AND type='output'";
$retorno=$this->db->query($sql, null);
While($item=$retorno->fetch(PDO::FETCH_ASSOC)){
$resultado[]=$item;
}
return $resultado;}}