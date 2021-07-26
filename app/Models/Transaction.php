<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable =['item','quantity','amount','deposit','balance','company','end_date','email','phone',
                          'created_by'];
}
