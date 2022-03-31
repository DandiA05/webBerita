<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsInd extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'newsind';
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'tanggal_berita', 'title','content','status', 'user_input','user_update','tanggal_update', 'id_category',
    ];
}
