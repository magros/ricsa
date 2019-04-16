<?php

namespace App;

use App\User;
use App\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ric extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'Nric','Npedido','customer_id', 'user_id', 'ric','name_proyect','complexity','status','cost',
        'delivery_place','description', 'estimated_time', 'definite_time','date_start','date_finish'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
