<?php 

function storeFormData($data)
{
     $simple_arr = array_values($data);
    // $data = implode(',',$simple_arr).'\n';
    // file_put_contents(__DIR__ . '/accidents.txt',$data,FILE_APPEND);
    $fileName = __DIR__ . '/accidents.txt';
    $fileHandle = fopen($fileName,'a');
    $data = implode(',',$simple_arr).PHP_EOL;
    fwrite($fileHandle,$data);
    fclose($fileHandle);

    return 'bien';
}

function getData(){
    // $file_contente = file_get_contents(__DIR__ . '/accidents.txt');
    $cont_array = [];
    $file_contente = fopen(__DIR__ . '/accidents.txt','r');
    // $file_contente = trim($file_contentes);
    
    if(true)
    {
        while(!feof($file_contente)){
        // $contente = fgets($file_contente);
        $contente = trim(fgets($file_contente),false);
        array_push($cont_array,explode(",",$contente));
        
        // list($nb_victime,$lieu,$date,$mise_en_cause) = $cont_array;
        // var_dump($cont_array);
     }
     return $cont_array;
    }else
    {
       return null;
    }


    
    
}

