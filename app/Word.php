<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    //
    protected $guarded = ['id'];
    public $timestamps = false;
    public function language()
    {
        return $this->belongsTo('App\Language', 'language_id', 'id');
    }
    public function item()
    {
        return $this->belongsTo('App\Item', 'item_id', 'id');
    }
}
