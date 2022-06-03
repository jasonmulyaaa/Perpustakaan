<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    protected $table = 'student_group';
    protected $fillable = ['rombel'];
    use HasFactory;
}