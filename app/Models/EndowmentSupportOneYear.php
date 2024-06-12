<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndowmentSupportOneYear extends Model
{
    use HasFactory;


    protected $table = 'endowment_support_one_year';
    protected $fillable = [
        'program',
        'degree',
        'seats',
        'totalAmount',
        'donor_name',
        'donor_email',
        'phone',
        'payments_status',
    ];
}
