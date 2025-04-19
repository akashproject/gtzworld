<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','category_id','name','slug','featured_image','banner_image','description','form','unit','application_dose','expire','excerpt','title','enable_otp','meta_description','schema','robots','utm_campaign','utm_source','lead_type','status','created_at',
    ];
}
