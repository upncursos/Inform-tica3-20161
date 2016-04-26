<?php
class Film{
   public $film_id=0;
   public $title="";
   public $release_year="";
   public $description="";
   public $language_id=0;
   function __construct($title,$description){
     $this->title = $title;
	 $this->description = $description;
   }
   function save(){
   }
   
   function toString(){
      return $this->title.",".$this->description;
   }

}
?>