<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sacodesweekends extends Model
{
    use HasFactory;
    protected $table = 'sacodesweekends';

    // Relationship To Contributor
    public function Contributors() {
        return $this->belongsTo(Contributors::class, 'contributor_id');
    }
}
