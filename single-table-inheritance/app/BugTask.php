<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BugTask extends Model
{
    protected $table = 'tasks'; // kita tentukan table yang digunakan secara eksplisit

    // newQuery ini akan selalu dipanggil saat kita membuat query baru untuk model ini
    // maka dari itu, kita override default query disini :)
    public function newQuery()
    {
        $query = parent::newQuery();
        return $query->whereType('bug'); // hanya task dengan type "bug"
    }

    public function reporter()
    {
        return $this->belongsTo('App\TesterUser', 'reporter_id'); // hanya dimiliki oleh user dengan role "tester"
    }

    protected $hidden = [
        'type'
    ];
}
