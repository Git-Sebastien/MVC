<?php 

namespace Core\Controller;

class Controller{
    protected $params = [];
    protected $layout = 'default';

    public function render(string $filename,$params = null) :void
    {
        ob_start();
        $this->params = $params;
        require ROOT .'./Views/'.$filename.'.php';
        $content = ob_get_clean();
        if($this->layout == false){
            echo $content;
        }
        else{
            require ROOT . 'Views/layout/'.$this->layout.'.php';
        }
    }

    public function loadModel(string $model_name)
    {
        require_once ROOT .'app'. DIRECTORY_SEPARATOR .'Models'. DIRECTORY_SEPARATOR .$model_name.'.php';
        $space = "\\App\\Models\\" ;
        $model = $space . $model_name;
        return $this->$model_name = new $model();
    }

}