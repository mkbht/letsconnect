<?php

namespace App\Model;

use App\Http\Sentiment\Analyzer;
use App\Http\Sentiment\Sentiment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'content', 'image', 'privacy'
    ];
    protected $appends = [
      'sentiment'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getSentimentAttribute()
    {
        $sentiment = new Analyzer(new Sentiment());

        $sentiment->train(asset('sentimentData/pos.txt'), 'pos', 1000);
        $sentiment->train(asset('sentimentData/neg.txt'), 'neg', 1000);

        $post = Post::find($this->attributes['id']);
        $score = $sentiment->score($post->content);
        return $score;
    }
}
