<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public $animes = [
        [
            'id'=>1,
            'name'=>'Demon Slayer', 
            'year'=>'2019 – In corso',
            'genre'=>'Dark Fantasy, Azione, Storico (Periodo Taisho)',
            'pic'=>'/media/anime/DemonSlayer.jpg',
            'description'=>'Ambientato in un Giappone dell\'inizio del XX secolo, segue la tragica ma determinata epopea di Tanjiro Kamado. Dopo che la sua famiglia viene brutalmente sterminata dai demoni e sua sorella minore Nezuko viene trasformata lei stessa in una creatura assetata di sangue (pur mantenendo una scintilla di umanità), Tanjiro decide di arruolarsi nel Corpo dei Cacciatori di Demoni. Il suo obiettivo è duplice: trovare una cura per far tornare Nezuko umana e vendicarsi del progenitore di tutti i demoni, Muzan Kibutsuji. Animato magistralmente dallo studio ufotable, è diventato uno dei fenomeni culturali e commerciali più colossali della storia degli anime grazie a combattimenti visivamente mozzafiato e a una colonna sonora memorabile.'
        ],
        [
            'id'=>2,
            'name'=>'DanDaDan', 
            'year'=>'2025',
            'genre'=>'Azione, Soprannaturale, Commedia Romantica',
            'pic'=>'/media/anime/DanDaDan.jpg',
            'description'=>'Una commistione folle e riuscitissima di generi. Momo Ayase è una liceale che crede negli spiriti ma non negli alieni; il suo compagno di scuola Okarun crede negli alieni ma non nei fantasmi. Per sfidarsi, visitano due luoghi diversi noti per i rispettivi avvistamenti e finiscono per avere ragione entrambi: Momo viene rapita dagli alieni e sblocca poteri psionici, mentre Okarun viene posseduto da una letale maledizione folkloristica. Da lì inizia una corsa contro il tempo assurda, ritmata e visivamente spettacolare.'
        ],
        [
            'id'=>3,
            'name'=>'The Summer Hikaru Died', 
            'year'=>'2025/2026',
            'genre'=>'Horror Psicologico, Mistero, Drammatico',
            'pic'=>'/media/anime/TheSummerHikaruDied.jpg',
            'description'=>'Yoshiki e Hikaru sono due adolescenti cresciuti insieme in un isolato villaggio di campagna. Un giorno, Hikaru scompare per una settimana tra le montagne. Quando ritorna, sembra lo stesso, ma Yoshiki si rende conto quasi subito di una verità agghiacciante: la cosa che ha davanti ha solo l\'aspetto del suo migliore amico, ma è in realtà un\'entità ultraterrena ed enigmatica. Un thriller psicologico teso, inquietante e profondamente emotivo.'
        ],
        [
            'id'=>4,
            'name'=>'Gachiakuta', 
            'year'=>'2025',
            'genre'=>'Dark Fantasy, Azione, Sci-Fi',
            'pic'=>'/media/anime/Gachiakuta.jpg',
            'description'=>'In una società fluttuante divisa rigidamente in classi, i ricchi scaricano i loro rifiuti nel "Baratro", una terra desolata sottostante. Rudo, un ragazzo dei bassifondi, viene ingiustamente accusato dell\'omicidio del suo mentore e gettato proprio nel Baratro come se fosse spazzatura. Sopravvissuto alla caduta, scopre un mondo sotterraneo brutale ma affascinante, dove impara a usare un potere unico legato agli oggetti considerati "rifiuti" per vendicarsi di chi lo ha tradito. Splendido per il suo stile grafico punk e street-art.'
        ],
        [
            'id'=>5,
            'name'=>'Sakamoto Days', 
            'year'=>'2025',
            'genre'=>'Azione, Commedia',
            'pic'=>'/media/anime/SakamotoDays.jpg',
            'description'=>'Taro Sakamoto era il sicario più temuto e leggendario del mondo, finché non si è innamorato. Oggi è un uomo in sovrappeso, felicemente sposato, che gestisce un tranquillo minimarket di quartiere. Tuttavia, il mondo della malavita non si è dimenticato di lui. Per proteggere la sua vita pacifica e la sua famiglia, Sakamoto deve respingere costanti attacchi di assassini professionisti, ma con una regola ferrea impostagli dalla moglie: non può più uccidere nessuno.'
        ],
        [
            'id'=>6,
            'name'=>'Witch Hat Atelier', 
            'year'=>'2026',
            'genre'=>'Fantasy, Avventura, Slice of Life',
            'pic'=>'/media/anime/WitchHatAtelier.jpg',
            'description'=>'Definito da molti come uno dei migliori prodotti dell\'anno per la sua atmosfera magica in stile Studio Ghibli. Racconta la storia di Coco, una ragazza comune che sogna di diventare una maga. In un mondo in cui la magia è un segreto ben custodito e si esercita disegnando rune con inchiostro magico, Coco scopre accidentalmente come funziona e viene presa come apprendista dal misterioso mago Qifrey. Una storia visivamente splendida che celebra l\'arte e la passione.'
        ],
    ];

    public function anime(){
        return view('anime', ['animes'=>$this->animes]); 
    }

    public function details($id){
        foreach($this->animes as $anime){
            if($id == $anime['id']){
                return view('animeDetails', ['anime'=>$anime]); 
            }
        }
    }
}
