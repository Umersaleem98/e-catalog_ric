<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = ['program_id', 'duration', 'amount'];

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}
