<?php

namespace App;

use App\Ric;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'company', 'email','phone','business_name','rfc','delivery_conditions','payment_conditions','country','state','city'
    ];

    public function rics()
    {
        return $this->hasMany(Ric::class);
    }

}
