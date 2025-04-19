<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','name','slug','parent_id','featured_image','description','excerpt','title','enable_otp','meta_description','schema','robots','utm_campaign','utm_source','lead_type','status','created_at',
    ];
}