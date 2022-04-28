<?php

namespace App\Http\Controllers;

class HomeController extends Controller

{
    public static $quotes = array("Ella y yo, dos locos viviendo una aventura castigada por Dios - William Omar Landron",

    "Mami, tu solo escribe - Stiven Mesa Londono",
    
    "Amor, dile que no, Te maltrate tu corazon, Quiero, baby, tu amor, Que me ames sin temor - David Luciano Acosta",
    
    "Tu me robaste el corazon como un criminal - Natalia Alexandra Gutierrez Batista",
    
    "Tu encuentro no es algo casual, para mi es un poco ilogico. He vivido un acto historico - Felix Gerardo Ortiz Torres",
    
    "Mami, yo quisiera quedarme, Pero la calle me llama - Llandel Veguilla Malave",
    
    "Llego a la disco vestido de Jordan - Bryan Castro Sosa",
    
    );
public function index()

{

    $totalQuotes = (count(HomeController::$quotes));

    $randomNumber = (rand(0,($totalQuotes-1)));
    
    $randomQuote = HomeController::$quotes[$randomNumber];
    return response()->json(['quote' => $randomQuote, 'server_ip' => gethostbyname(gethostname())]);
    
}

}