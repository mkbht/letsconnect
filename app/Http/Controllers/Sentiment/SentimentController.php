<?php

namespace App\Http\Controllers\Sentiment;

use App\Http\Sentiment\Analyzer;
use App\Http\Sentiment\Sentiment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SentimentController extends Controller
{

    public function analyze(Request $request)
    {
        $sentiment = new Analyzer(new Sentiment());

        $sentiment->train(asset('sentimentData/pos.txt'), 'pos', 5000);
        $sentiment->train(asset('sentimentData/neg.txt'), 'neg', 5000);

        $score = $sentiment->score($request->text);
        echo $score['category']. "<br>Pos: ". $score['score']['positivity']. ", Neg:". $score['score']['negativity'];
    }

}
