<?php

use Phalcon\Http\Response;

class SoapController extends ControllerBase
{

    public function indexAction()
    {
        
    }


    public function testSoapAction()
    {
        $wsdl   = "http://186.31.137.87/suite17/webservices/articulos.php?wsdl";
        $client = new SoapClient($wsdl, array('login'=>"CUBIQ@6",'password'=>"CUBIQ123"));  
        $client->__setLocation('http://186.31.137.87/suite17/webservices/articulos.php');
        $request_param = array(
           "arreglo_articulos" => array
           (
            "operacion" => "M",
            "articulo" => "052740201567",
            "integra_vocollect"=>""
           )
        );
        
        try
        {
            $responce_param = $client->validarArticulos($request_param);
           //$responce_param =  $client->call("webservice_methode_name", $request_param); // Alternative way to call soap method
        } 
        catch (Exception $e) 
        { 
            return e;
        }
    }

}

