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
    public function materialQuotation(){
        return $this->hasOne(MaterialQuotation::class);
    }
    public function materialEngineering(){
        return $this->hasOne(materialEngineering::class);
    }
    public function inventory(){
        return $this->hasMany(Inventory::class);
    }

    public function scopeByClients($q, $clients_id){
        if(!is_null($clients_id)) return $q->whereIn('customer_id',$clients_id);
    }
    public function scopeByStatus($q, $status){
        if(!is_null($status)) return $q->where('status',$status);
    }
    public function scopeByComplexity($q, $complexity){
        if(!is_null($complexity)) return $q->where('complexity',$complexity);
    }

    public function getComplexityNameAttribute()
    {
        $complexity = $this->complexity;

        switch ($complexity){
            case 1:
                return 'Baja Complejidad';
            case 2;
                return 'Mediana Complejidad';
            case 3:
                return 'Alta Complejidad';
            default:
                throw new \Exception("Invalid complexity: {$complexity}");
        }
    }

    public function getStatusNameAttribute()
    {
        if($this->status == 1 || $this->status == 2 )
            return 'Propuesta';
        return 'Ric';
    }

}
