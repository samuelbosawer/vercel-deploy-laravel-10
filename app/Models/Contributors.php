<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributors extends Model
{
    use HasFactory;

    // relationship with listing
    public function SaCodesWeekends() {
        return $this->hasMany(SaCodesWeekends::class, 'contributor_id');
    }

}
