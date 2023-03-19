<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contact',
        'dob',
        'gender',
    ];

    /**
     * Get the user that owns the pateint.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
