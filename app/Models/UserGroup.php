<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;
    protected $primaryKey = 'group_id';
    protected $keyType = 'string';
    protected $fillable = ['group_id', 'group_name', 'desc'];
}
