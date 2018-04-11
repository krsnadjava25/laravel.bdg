<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureTask extends Model
{
    protected $table = 'tasks'; // kita tentukan table yang digunakan secara eksplisit

    // newQuery ini akan selalu dipanggil saat kita membuat query baru untuk model ini
    // maka dari itu, kita override default query disini :)
    public function newQuery()
    {
        $query = parent::newQuery();
        return $query->whereType('feature'); // hanya task dengan type "feature"
    }

    protected $hidden = [
        'type',
        'reporter_id' // karena task bertype "feature" tidak memiliki reporter
    ];
}
