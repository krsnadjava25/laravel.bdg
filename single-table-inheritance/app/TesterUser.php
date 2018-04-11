<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TesterUser extends Model
{
    protected $table = 'users'; // kita tentukan table yang digunakan secara eksplisit

    // newQuery ini akan selalu dipanggil saat kita membuat query baru untuk model ini
    // maka dari itu, kita override default query disini :)
    public function newQuery()
    {
        $query = parent::newQuery();
        return $query->where('role_id', 1); // silahkan baca migration table users
    }

    public function reported_bugs()
    {
        return $this->hasMany('App\BugTask', 'reporter_id'); // hanya memiliki task dengan type "bug"
    }
}
