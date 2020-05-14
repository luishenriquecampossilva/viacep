<?php 


function getAdrdress(){
 
if(isset($_POST['cep'])){
$cep = $_POST['cep'];
$cep =filterCep($cep);


$address = getAdrdressViacep($cep);

}else{
    $address = addressEmpy();
}

return $address;

}
function addressEmpy(){
    return  (object)[
        'cep'=>'',
        'logradouro'=>'cidade',
        'bairro'=>'',
        'localidade'=>'',
        'uf'=>''
    
    ];
}
function filterCep(String $cep):String{
return  preg_replace('/[^0-9]/','',$cep);
}
function isCep():bool{

}
function getAdrdressViacep(String $cep){


    $url = 'https://api.postmon.com.br/v1/cep/'.$cep;
    return json_decode(file_get_contents($url));
}