<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'no_resi';
    protected $keyType = 'string';

    public function invoice(){
        return $this->belongsToMany('App\Models\invoice','invoice_pengirimen')->withPivot(['posisix','posisiy','posisiz','volume']);
    }
}
