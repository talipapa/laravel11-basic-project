<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone'];

    public function jobListings(){
        return $this->hasMany(JobListing::class);
    }
}
