<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Table Name
    protected $table = 'BackupSAP_LM2';

    public $fillable = [
        'PONum', 
        'Currency', 
        'RequsitionItemID', 
        'PODateCreated', 
        'ItemDesc', 
        'IMMaterial',
        'Plant',
        'MatGroup',
        'INfoRec',
        'VendorMat#',
        'Qty',
        'OPU',
        'NetPrice', 
        'PR#',
        'Requisitioner',
        'InboundDeliveryNum',
        'DeliveryDates', 
        'VendorNo',
        'PurchasingGrp'
        // 'created_at',
        // 'updated_at'
    ];
    
}
