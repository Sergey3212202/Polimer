<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path','gellery_id'];
    public function gellery(){

        return $this->belongsTo(Gellery::class);
    }
}
