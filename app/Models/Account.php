<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    // Table Name
    protected $table = 'cdbAccounts';
    // Primary Key
    protected $primaryKey = 'AccountID';    
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
