<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMediaModel extends Model
{
    use HasFactory;

    protected $fillable = ['link_sosmed', 'icon_sosmed', 'status_sosmed'];
}
