<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    use HasFactory;
 protected $table='user';
protected $fillable=['name','fathername','gender','date_of_birth','age','booking_date','file_path'];


}
