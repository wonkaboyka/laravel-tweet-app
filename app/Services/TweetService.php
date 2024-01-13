<?php
namespace App\Services;
use App\Models\Tweet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\CreateRequest;
use App\Http\Requests\Tweet\UpdateRequest;


class TweetService
{
    public function getTweets()
    {
        return Tweet::orderBy('created_at','DESC')->get();
    }
    public function checkOwnTweet(int $userId,int $tweetId): bool{
         $tweet = Tweet::where('id',$tweetId)->first();
        if (!$tweet){
            return false;
    }
    return $tweet->user_id === $userId;
    }
}
