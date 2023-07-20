<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ttj extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth_date',
        'phone_num',
        'parent_num',
        'region',
        'address',
        'facultate',
        'facultate_id',
        'cafedra',
        'deriction',
        'course',
        'group',
        'shape',
        'details',
        'check',
        'doc'
    ];
}
