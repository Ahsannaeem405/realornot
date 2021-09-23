<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Express extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'zip_No',
        'photos',
        'videos',
        'role',
        'userID',
        'store',
        'buyer_product_status',
        'status_expert',
         'comment',
         'admin_expert',
         'expert_point',






    ];

    public function Brand(){
        return $this->belongsTo('App\Models\Brand', 'name');
    }
}
