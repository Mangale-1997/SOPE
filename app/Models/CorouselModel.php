<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CorouselController;

class CorouselModel extends Model
{
    use HasFactory;
    protected $table  = 'corousel';
    protected $primaryKey  = 'id';
    protected $fillable  = ['content1', 'content2', 'content3', 'photo', 'created_date'];


    

}
