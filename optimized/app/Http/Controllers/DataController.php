<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cache;
use App\User;

class DataController extends Controller
{
    public function withoutChunk() {
        ini_set('memory_limit', '-1'); // FOR FUN ONLY, NEVER EVER DO THIS AGAIN!!!
        $users = User::where('name', 'like', 'thanos%')->get();
        $out = (object)[];
        $out->memory = memory_get_peak_usage(true).' Byte(s)';
        $out->data = $users;
        return json_encode($out);
    }

    public function withChunk() {
        ini_set('memory_limit', '-1'); // FOR FUN ONLY, NEVER EVER DO THIS AGAIN!!!
        $users = collect();
        User::where('name', 'like', 'thanos%')->chunk(10000, function($us) use ($users) {
            foreach ($us as $user) {
                $users->push($user);
            }
        });
        $out = (object)[];
        $out->memory = memory_get_peak_usage(true).' Byte(s)';
        $out->data = $users;
        return json_encode($out);
    }

    public function withCache() {
        ini_set('memory_limit', '-1'); // FOR FUN ONLY, NEVER EVER DO THIS AGAIN!!!
        $data = Cache::remember('thanos', 5, function () {
            $users = collect();
            User::where('name', 'like', 'thanos%')->chunk(10000, function($us) use ($users) {
                foreach ($us as $user) {
                    $users->push($user);
                }
            });
            return $users;
        });
        $out = (object)[];
        $out->memory = memory_get_peak_usage(true).' Byte(s)';
        $out->data = $data;
        return json_encode($out);
    }
}
