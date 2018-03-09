<?php

//TODO: tildes

$string = file_get_contents("./base_depurada.json");
$emociones = json_decode($string, true);

if(isset($_POST['text'])){
    $texto = strtoupper($_POST['text']);
    $result = array("data"=>[]);
    foreach ($emociones[0] as $index => $emocion) {
        $match_em = 0;
        $found_frases = array();
        foreach ($emocion as $frase) {
            $freq = substr_count($texto,$frase);
            if($freq!=0){
                $match_em+=$freq;
                array_push($found_frases, array('emocion' => $index , 'frase'=> $frase ));
            }
        }
        if($match_em!=0){
            array_push($result['data'], array('emocion'=>$index, 'freq'=>$match_em, 'frases_encontradas'=>$found_frases ));
        }
    }
}else{
    $result = "Error";
}
$result['texto_ingresado'] = $_POST['text'];
echo json_encode($result);
