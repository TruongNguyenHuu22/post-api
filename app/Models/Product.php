<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
    public $fillable =[
        'title',
        'description',
        'created_by',
        'updated_by',
        'thumbnail',
        'name',
        'shortDescription',
        'originalPrice',
        'salePrice',
        'isPromotion',
        'promotionPercent',
        'isFreeShip',
        'category_id',
    ];
}
