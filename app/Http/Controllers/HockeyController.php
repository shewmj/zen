<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;


class HockeyController extends Controller
{


    public function home() {
    	$client = new Client();
        $res = $client->request('GET', 'https://statsapi.web.nhl.com/api/v1/teams?expand=team.stats');
        $json = $res->getBody();
  		
  		$info = json_decode($json, true);
  		$info = $info['teams'];
  		$teams = collect($info)->sortBy('name');


		//echo '<pre>';
    	//print_r($info);


		return view('hockey.home', compact('teams'));
    }


    public function team($teamName, $teamId) {


    	$client = new Client();
        $res = $client->request('GET', 'https://statsapi.web.nhl.com/api/v1/teams/' . $teamId . '?expand=team.stats');
        $json = $res->getBody();
        $info = json_decode($json, true);
  		$info = $info['teams'][0]['teamStats'][0]['splits'];
  		
  		$inHouse = collect($info[0]['stat']);
  		$leagueWide = collect($info[1]['stat']);
  		$teamName = $info[0]['team']['name'];

  		//echo '<pre>';
    	//print_r($info);

    	$res = $client->request('GET', 'https://statsapi.web.nhl.com/api/v1/teams/' . $teamId . '/roster');
        $json = $res->getBody();
        $info = json_decode($json, true);
        $info = $info['roster'];

  		$players = collect($info)->sortBy('person.fullName');

		//echo '<pre>';
    	//print_r($players);


    	return view('hockey.team', compact('inHouse', 'leagueWide', 'teamName', 'players'));



    }



    public function player($teamName, $playerId) {


    	$client = new Client();
        $res = $client->request('GET', 'https://statsapi.web.nhl.com/api/v1/people/' . $playerId);
        $json = $res->getBody();
        $info = json_decode($json, true);


		echo '<pre>';
    	print_r($info);



    }





    
}
