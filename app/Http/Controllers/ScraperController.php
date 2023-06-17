<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;

class ScraperController extends Controller
{
    public function cs(){
        
//         $client=new Client();

    
//         $website = $client->request('GET', "https://www.counter-strike.net/news/updates");
//       dd($website->filter('#csgo_react_root > app_CSGORoot_2I'));
//         $pagecs= $website->filter('#csgo_react_root')->each(function ($node) {
    
//             $lvdate = trim($node->filter('.updatecapsule_date_gvPzK')->text());
//             $patchdate = trim($node->filter('.updatecapsule_Title_13NfC')->text());
//         });  
// dd($pagecs);
$response = Http::get('https://store.steampowered.com/events/ajaxgetpartnereventspageable/?clan_accountid=0&appid=730&offset=0&count=100&l=english&origin=https:%2F%2Fwww.counter-strike.net%27');
        // dd($response->json());
return view('patch.cspatch', ['data'=>$response->json()]);
    }

};