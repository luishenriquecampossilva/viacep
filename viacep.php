<?php 
$address = (object)[
    'cep'=>'',
    'logradouro'=>'',
    'bairro'=>'',
    'localidade'=>'',
    'uf'=>''

];
if(isset($_POST['cep'])){
$cep = $_POST['cep'];
$cep = str_replace('_','',$cep);
$cep = str_replace('+','',$cep);
$cep = str_replace(' ','',$cep);
$url = 'https://viacep.com.br/ws/'.$cep.'/json/';
$address = json_decode(file_get_contents($url));

}