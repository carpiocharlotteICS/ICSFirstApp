<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    // Table Name
    protected $table = 'accountGroup';
       
    public $fillable = [
        'AccountGroup', 
        // 'created_at',
    ];
}