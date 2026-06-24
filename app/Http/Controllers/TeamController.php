<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public $teamMembers = [
        [
            'id'=>1, 
            'username'=>'@KaijuWriter', 
            'name'=>'Marco',
            'surname'=>'Serra' , 
            'tag'=>'Il Caporedattore',
            'subtag'=>'Esperto di Retro-Anime',
            'role'=>'Recensioni di grandi classici, robottoni e news dell\'ultima ora',
            'propic'=>'/media/team/Kaiju.jpg'
            ],
        [
            'id'=>2, 
            'username'=>'@HikariVibes',
            'name'=>'Sofia',
            'surname'=>'Moretti',
            'tag'=>'L\'Otaku Incallita',
            'subtag'=>'Recensitrice di Manga e Shojo',
            'role'=>'Rubriche sui manga del momento, adattamenti anime e trend sui social',
            'propic'=>'/media/team/Hikari.jpg'
            ],
        [
            
            'id'=>3, 
            'username'=>'@SenpaiZone', 
            'name'=>'Davide',
            'surname'=>'Russo',
            'tag'=>'Il Divoratore di Shonen',
            'subtag'=>'Creator di Contenuti',
            'role'=>'Analisi dei power-scaling, teorie sui finali di stagione e meme',
            'propic'=>'/media/team/Senpai.jpg'
            ],
    ];

    public function aboutUs(){
        return view('aboutUs', ['teamMembers'=>$this->teamMembers]);
    }

    public function details($id){
        foreach($this->teamMembers as $teamMember){
            if($id == $teamMember['id']){
                return view('teamDetails', ['teamMember'=>$teamMember]);
            }
        }
    }

}
