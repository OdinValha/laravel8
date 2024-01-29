<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Quotation extends Model
{
    use HasFactory; 
    protected $table = 'quotations'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['remark', 'vat_percent', 'vat', 'sub_total', 'net_total', 'customer_id', 'user_id'];

    public function quotationDetails()
    {
        return $this->hasMany(QuotationDetail::class, 'quotation_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
