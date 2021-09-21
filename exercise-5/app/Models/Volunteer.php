<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{
    use HasFactory;

    protected $dates = ['BirthDate'];
    protected $primaryKey = 'VolunteerId';
    protected $fillable = [];
    public $timestamps = true;

    public function sex()
    {
        return $this->belongsTo('App\Models\Sex', 'sex_id');
    }

    public function region()
    {
        return $this->belongsTo('App\Models\Region', 'region_code');
    }
}
