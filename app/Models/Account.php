<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $primaryKey = 'AccountID';
    protected $table = 'cdbAccounts';
    public $fillable = [
        'AccountName', 
        'AccountGroup', 
        'AccountType', 
        'DomainAccount', 
        'Email', 
        'ValidTo', 
        'NickName'
        // 'created_at',
        // 'updated_at'
    ];
}
