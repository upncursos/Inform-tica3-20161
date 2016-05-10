<?php

class Language{
	public $language_id;
	public $name;
	public $last_update;
	
	function __construct($name,$last_update){
	   $this->language_id=0;
	   $this->name = $name;
	   $this->last_update = $last_update;
	}
	function save(){
	   include("conexion.php");
	   if($this->language_id==0){
	   $sql = $conexion->prepare("insert into language (name,last_update) values(?,?)");
	   $sql->bindValue(1,$this->name);
	   $sql->bindValue(2,$this->last_update);
	   }
	   else{
	   $sql = $conexion->prepare("update language set name=?, last_update=? where language_id=?");
	   $sql->bindValue(1,$this->name);
	   $sql->bindValue(2,$this->last_update);
	   $sql->bindValue(3,$this->language_id);
	   }

	   $sql->execute();
	}
	static function findById($id){
	   
	   include("conexion.php");
	   $sql = $conexion->prepare("select * from language where language_id=?");
	   $sql->bindValue(1,$id);
	   $sql->execute();
	   $filas = $sql->fetchAll(PDO::FETCH_ASSOC);
       $language=0;
		foreach($filas as $fila)
		{
		   $language = new Language($fila["name"],$fila["last_update"]);
		   $language->language_id = $fila["language_id"];
		}
		return $language;
	}
	function toString(){
		return $this->language_id." ".$this->name." ".$this->last_update;
	}

}


?>