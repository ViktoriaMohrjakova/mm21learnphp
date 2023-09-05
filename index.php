<?php

class Box {
    protected $length;
    protected $height;
    protected $width;
    protected $material;
    public static $count = 0;
    
    public function __construct($length, $height, $width){
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }
    
    public function volume(){
        var_dump(self::$count);
        return $this->length * $this->height * $this->width;
    }
    public function getLength(){
        return $this-> length;
    }
    public function setLength(){
        if($length > 0){
            $this->length = $length;
        }
    }
    public static function countup(){
        self:: $count++;
    }
}

class MetalBox extends Box {
   public $weight;
   public function __construct($length, $height, $width){
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this-> material = 'metal';
   }
}

$box= new MetalBox(1,1,1);
$box->volume();
MetalBox::countup();

MetalBox::countup();

MetalBox::countup();

var_dump(MetalBox::$count);
