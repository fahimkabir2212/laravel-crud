<?php

namespace App\Models\HMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patient';

    const CREATED_AT = 'cd';
    const UPDATED_AT ='ud';
}
