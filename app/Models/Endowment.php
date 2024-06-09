<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endowment extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'program_id', 'type', 'amount'];

    public function category()
    {
        return $this->belongsTo(EndowmentCategory::class, 'category_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}
