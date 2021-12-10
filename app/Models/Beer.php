<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
 protected $table = 'beers';
 protected $primaryKey = 'id';
 protected $fillable = [
     'name','value','origem'
 ];
}
