<?php

namespace App;

use App\MaterialType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'description','specification','thickness','dimension','length',
        'net_weight','gross_weight', 'trademark','price','r_rc','provider_id','material_type_id','family_id'
    ];

    public function materialType()
    {
        return $this->belongsTo(MaterialType::class);
    }
}
