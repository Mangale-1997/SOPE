<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table  = 'comment';
    protected $primaryKey  = 'id';
    protected $fillable  = ['name', 'email', 'photo', 'subject', 'comment', 'phone'];

}
