<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'user_id',
        'name',
        'rombel_id',
        'rayon_id',
        'saldo_tabungan',
    ];

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }

    public function rombel()
    {
        return $this->belongsTo(Rombel::class);
    }

    public function username()
    {
        return $this->belongsTo(User::class, 'user_id', 'username')->select('username');
    }
}
