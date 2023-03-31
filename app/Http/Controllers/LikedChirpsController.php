<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chirp;
class LikedChirpsController extends Controller
{
    public function toggle(Chirp $chirp)
    {
        $chirp->likes()->toggle(auth()->id());
//        if ($chirp->likes()->where('user_id', auth()->id())->exists()) {
//            $chirp->likes()->detach(auth()->id());
//        } else {
//            $chirp->likes()->attach(auth()->id());
//        }

        return redirect(route('chirps.index'));
    }
}
