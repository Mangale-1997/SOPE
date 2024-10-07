<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    use HasFactory;

    protected $table  = 'services';
    protected $primaryKey  = 'id';
    protected $fillable  = ['service_name', 'service_description', 'photo', 'created_date'];

}
