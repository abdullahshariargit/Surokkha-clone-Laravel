<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeFirstDosePending($query)
    {
        return $query->dose_one == 1;
    }
    public function scopePending($query)
    {
        return $query->status == 'pending';
    }

    public function scopeFirstDose($query)
    {
        return $query->status == 'first_dose';
    }

    public function scopeSecondDose($query)
    {
        return $query->status == 'second_dose';
    }

    public function scopeBoosterDose($query)
    {
        return $query->status == 'booster';
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }
    public function first_dose()
    {
        return $this->hasOne(FirstDose::class);
    }

    public function second_dose()
    {
        return $this->hasOne(SecondDose::class);
    }
}
