<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    public function creating(Post $post)
    {
        if(!app()->runningInConsole()){
            $post->user_id = auth()->user()->id;
        }

    }

    public function created(Post $post)
    {
        //
    }

    public function updated(Post $post)
    {
        //
    }

    public function deleting(Post $post)
    {
        if($post->image){
            Storage::delete($post->image->url);
        }
    }

    public function deleted(Post $post)
    {
        //
    }

    public function restored(Post $post)
    {
        //
    }

    public function forceDeleted(Post $post)
    {
        //
    }
}
