<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'employee_id','name','gender','email'
    ];
    public $timestamps = false;
}
