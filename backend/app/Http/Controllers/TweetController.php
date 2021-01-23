<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function tweeting(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:255',
        ]);

        Tweet::create([
            'body' => $request->body
        ]);
    }
}
