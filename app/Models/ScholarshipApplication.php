<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'nomor_hp',
        'semester',
        'ipk',
        'beasiswa',
        'berkas',
        'status_ajuan',
    ];

    // Define mutator for IPK field
    public function setIpkAttribute($value)
    {
        // Set IPK to a fixed value
        $this->attributes['ipk'] = 3.01; // Asumsi IPK
    }
}