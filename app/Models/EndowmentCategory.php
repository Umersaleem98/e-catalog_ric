<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndowmentCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function endowments()
    {
        return $this->hasMany(Endowment::class, 'category_id');
    }
}
