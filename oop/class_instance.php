<?php
class MyFileObject{
    private $filename;
    function __construct($fname){        
       $this->filename = $fname;
       if(!file_exists($this->filename)){
           die('There is no file.'.$this->filename);
       }
    }

    function isFile(){
        return is_file($this->filename);
    }

}
$file = new MyFileObject('data.txt');
//$file->filename ='data.txt';
//$file->filename = 'asdfadsf.txt';
var_dump($file->isFile());
var_dump($file->filename);

//$file2 = new MyFileObject();
//$file2->filename='data2.txt';
//var_dump($file2->isFile());
?>