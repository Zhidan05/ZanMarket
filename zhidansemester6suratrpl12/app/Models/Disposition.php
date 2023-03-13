<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposition extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function sumuk()
    {
        return $this->belongsTo(Inbox::class,'id_suratmasuk','id');
    }
}
