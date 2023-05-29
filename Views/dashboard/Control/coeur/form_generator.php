
<?php


class Form_generator { 
    
    private $data;
    public $surround='p';

    public function __construct($data=array()){
        $this->data=$data;
    } 
    public function getValue($index){
        return isset($this->data[$index])? $this->data[$index] : null; 
    }
    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    } 
 
    public function input($edit_input_file,$type,$label,$name,$placeholder=null,$icon=null,$value=null){
            // la fonction prend en parametre le label, le name du champs, 
            if($type=="text") {              
            
            return $this->surround('    
                 
                <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-company">'.$label.'</label>
                      <div class="input-group input-group">
                        <span id="basic-icon-default-company2" class="input-group-text"><i
                            class="'.$icon.'"></i></span>
                        <input type="text" name="'.$name.'"  value="'.$value.'" id="basic-icon-default-company" class="form-control" placeholder="'.$placeholder.'">
                      </div>
                </div>'
             );
            }
            elseif($edit_input_file == true and $type=="file") {              
           
            return $this->surround('
            <div class="card-body mb-4">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="Views/dashboard/uploads_images/'.$value.'" alt="avatar"
                              class="d-block rounded"  width="300px" id="uploadedAvatar">
                            <div class="button-wrapper">
                              <div class="mt-3 mb-2">
                                <label for="formFile" class="form-label">'.$label.' : </label>
                                <input class="form-control" name="'.$name.'" type="file" id="formFile">

                              </div>
                              <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>

                          </div>
                        </div>          
                
            '
             );
            }
            elseif($edit_input_file ==false and $type=="file") {              
            
            return $this->surround('             
                <div class="mt-3 mb-2">
                    <label for="formFile" class="form-label">'.$label.'</label>
                    <input class="form-control" name="'.$name.'" type="file" id="formFile">

                </div>'
             );
            }
            elseif($type=="file") {            
            
          
            }
    }
    public function submit($name){
        return $this->surround('
                     <div class="mt-3">
                      <button type="submit" name="'.$name.'" class="btn btn-success" style="width:%"> Enregister </button>
                    </div>
                    ');
    }
    

}

?>