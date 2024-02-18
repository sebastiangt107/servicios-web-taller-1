<?php



class testsoap
{
    public function saludar($name)
    {
        return 'Hola '.$name. '!';
    }

    public function operacion($num1, $num2, $oper, $accion){
         if($oper=="suma"){
            $accion = $num1 + $num2;
         }else if($oper=="resta"){
            $accion = $num1 - $num2;
         }else if($oper=="multiplicacion"){
            $accion = $num1 * $num2;
         }else if($oper=="division"){
            $accion = $num1/$num2;
         }
         return  $accion;
    } 
}
    $options = array('uri'      => 'http://localhost/webservices/tema1/');
$server = new soapServer(NULL,$options);
$server->setClass('testsoap');
$server->handle();

