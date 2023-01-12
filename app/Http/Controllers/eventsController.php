<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;

class eventsController extends Controller
{
    public function codeCombat() {
        $event = events::where('event_id',1)->get();

        return view('events.code-combat', compact('event'));
    }

    public function debug() {
        $event = events::where('event_id',2)->get();
        return view('events.debug', compact('event'));
    }

    public function gaming() {
        $event = events::where('event_id',3)->get();
        return view('events.gaming', compact('event'));
    }

    public function hackathon() {
        $event = events::where('event_id',4)->get();
        return view('events.hackathon', compact('event'));
    }

    public function memeGram() {
        $event = events::where('event_id',5)->get();
        return view('events.meme-gram', compact('event'));
    }

    public function natyakshetra() {
        $event = events::where('event_id',7)->get();
        return view('events.natyakshetra', compact('event'));
    }

    public function quiz() {
        $event = events::where('event_id',8)->get();

        return view('events.quiz', compact('event'));
    }

    public function paperPresentation() {
        $event = events::where('event_id',6)->get();
        return view('events.paper-presentation', compact('event'));
    }

}
