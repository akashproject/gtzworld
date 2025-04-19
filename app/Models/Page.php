<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name','slug','featured_image','banner_image','description','template','title','enable_otp','meta_description','schema','robots','utm_campaign','utm_source','lead_type','status','created_at',
    ];
}
