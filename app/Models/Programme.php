<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'secteur', 'candidat_id'];
    public function candidat()
{
    return $this->belongsTo(Candidat::class);
}
}
