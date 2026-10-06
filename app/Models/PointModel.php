<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointModel extends Model
{
    use HasFactory;
    protected $table = 'points';
    protected $fillable = [
    	'parent_category',
    	'sports_category',
    	'sports_type',
        'team',
        'win',
        'lose',
        'nrr',
        'status'
    ]; 
}
