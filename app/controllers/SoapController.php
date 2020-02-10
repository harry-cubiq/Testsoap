<?php

use Phalcon\Http\Response;

class SoapController extends ControllerBase
{

    public function indexAction()
    {
        
    }


    public function testSoapAction(){

		$response  =  new Response();
		$response->setContentType("application/json","UTF-8");
		
		$response->setStatusCode(200,"ok");
		$response->setJsonContent([
				"test"     => "Working",
				"success" => true
		]);
		
		return $response;
    }

}

