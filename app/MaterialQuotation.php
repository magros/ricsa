<?php

namespace App;

use App\Quotation;
use App\Material;
use App\Ric;
use Illuminate\Database\Eloquent\Model;


class MaterialQuotation extends Model
{
    protected $fillable = [
        'quantity', 'name','total','quotation_id','material_id','ric_id'
    ];
    public function quotation(){
        return $this->belongsTo(Quotation::class);
    }
    public function material(){
        return $this->belongsTo(Material::class);
    }
    public function ric(){
        return $this->belongsTo(Ric::class);
    }
}
