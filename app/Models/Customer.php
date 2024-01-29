<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory; 

    protected $table = 'customers'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['name', 'organization_name', 'address', 'phone', 'email', 'remark', 'user_id'];

    public function quotation()
    {
        return $this->belongsTo(Quotation::class,'quotation_id');
    }

}
