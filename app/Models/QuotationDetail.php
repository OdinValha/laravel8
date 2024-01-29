<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationDetail extends Model
{
    use HasFactory; 

    protected $table = 'quotation_details'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['amount', 'price','total', 'remark', 'quotation_id', 'product_id'];

    public function quotation()
    {
        return $this->belongsTo(Quotation::class,'quotation_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

}
