<?php 

class move_podcast{

public static $upload_cod;
public static $name_to_up;
private $moved;

private function getCode($code){
       $this->cod=$code;
} 
private function getname($name){
       $this->name=$name;
} 
public static function upload($base_name){
       
        $uploads_dir = 'Views/API/Uploads/podcats';
        $tmp_name =  $base_name["tmp_name"];
        $accepted_extenssions= array ('.mp3','.MP3','.mp4','.MP4');

        $file_extention = strrchr($base_name["name"],'.');
        if (in_array($file_extention,$accepted_extenssions)){
        
           $name = rand()."fk".basename( $base_name["name"]);      
           $name_of_file=self::$name_to_up = basename( $base_name["name"]);
           $moved=move_uploaded_file($tmp_name, "$uploads_dir/$name"); 

              if($moved){ 
              return self::$upload_cod= 1;           
              }   
        }  
        elseif(!in_array($file_extention,$accepted_extenssions)) {
               return self::$upload_cod= 0;
        }       
        else{ 
           return self::$upload_cod= 0;
        }     
    
}
}
?>