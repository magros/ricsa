<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Quotation extends Model
{
    protected $fillable = [
        'id'
    ];
    public function materialQuotation(){
        return $this->hasMany(MaterialQuotation::class);
    }
}
