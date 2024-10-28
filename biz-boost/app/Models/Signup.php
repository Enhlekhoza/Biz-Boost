<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'idNumber',
        'dob',
        'address',
        'contactNumber',
        'businessType',
        'registeredBusiness',
        'operationalDuration',
        'pep',
        'businessIncome',
        'taxId',
        'bankAccount',
    ];
}
