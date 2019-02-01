<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;


class PagesController extends Controller
{
    public function home() {
    	$client = new Client();
        $res = $client->request('GET', 'https://statsapi.web.nhl.com/api/v1/teams/23/roster');

        //$parsed = Request::parseHeader($res, 'Link');
		//var_export($parsed);

        $reply = $res->getBody();


        
		//echo '<pre>';
  		
  		$reply = json_decode($reply, true);
  		
		//print_r($reply);

  		


    	//print_r($reply['roster'][0]['person']);
    	
        

       

        

		//echo $reply;//->pluck('teamName')->toArray();

            

    	return view('index');
    }

    public function stuff() {
    	return view('stuff');
    }

    public function contact() {
    	return view('contact');
    }



     public function resume() {
    	return view('resume');
    }
}
