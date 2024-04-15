<?php

namespace App\Http\Controllers;

use App\Services\ContestService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Score;

class ContestController
{
    public function getRandom(Score $table, Request $request)
    {
        $randomScores = $table->inRandomOrder()->take(2)->get();
        if ($table->find($request->id)) {
            $table->find($request->id)->increment('score', 1);
        }

        return view('contestplay', [
            'first' => $randomScores[0]->link,
            'firstid' => $randomScores[0]->id,
            'second' => $randomScores[1]->link,
            'secondid' => $randomScores[1]->id
        ]);
    }

    public function getBest(Score $table) {
        $best = $table->orderBy('score', 'desc')->take(3)->get();
        return view('contest', [
            'first' => $best[0]->link,
            'firstscore' => $best[0]->score,
            'second' => $best[1]->link,
            'secondscore' => $best[1]->score,
            'third' => $best[2]->link,
            'thirdscore' => $best[2]->score
        ]);
    }
}
