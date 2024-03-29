<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function getemp_id()
    {
        return $this->belongsTo('App\Models\Employee', 'emp_id', 'emp_id');
    }
    use HasFactory;
    protected $table='_employee_attendance';
    protected $fillable = [
        'emp_id',
        'checkin_time',
        'checkout_time', // Ensure this matches the column name in the table
        'status',
        'date',
    ];

}
