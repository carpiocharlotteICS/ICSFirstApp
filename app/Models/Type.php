<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    // Table Name
    protected $table = 'accountType';
       
    public $fillable = [
        'id',
        'AccountType', 
    ];
}