<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'bahan_baku';

    public function produksi()
    {
        return $this->belongsToMany(Production::class);
    }
}
