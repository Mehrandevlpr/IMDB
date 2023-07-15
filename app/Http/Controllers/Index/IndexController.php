<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index(){

        // $client = new \GuzzleHttp\Client();

        // $videos = $client->request('GET', 'https://api.themoviedb.org/3/movie/now_playing', [
        // 'headers' => [
        //     'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1ZTNmNjRlN2E3YWEyNDc5MDgxZDg5MDJhYjVmM2E2YSIsInN1YiI6IjY0YjE3ZmIyMjUzZmFiMGMzZTllYTkwYiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Jh6NPQGCmGfmH-VTesyI6uMz5JXUzwElMomNIz7631w',
        //     'accept' => 'application/json',
        // ],
        // ]);

        // $data =json_decode($videos->getBody());
        // dump($data);
        $mostPopularVideos = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];

        $popularVideos = array();
        foreach($mostPopularVideos as $index => $mostPopularVideo){
            $popularVideos[$index] = array_merge($mostPopularVideo,$popularVideos);
            $popularVideos[$index]['image'] = $this->bindImage($mostPopularVideo['id']);
        }
        $popularVideos = array_slice($popularVideos,0,3);
        $videos = Video::all()->random(6);
        $mostViewedVideos = Video::all()->random(6);
        // $mostPopularVideos = Video::all()->random(6);
        return view('index',compact('videos','mostViewedVideos','popularVideos'));
    }


    public function bindImage($id){
        $img = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'.$id.'/images')
        ->json();
        
        return $img['posters'][rand(0,count($img['posters'])-1)]['file_path'];
    }
}
