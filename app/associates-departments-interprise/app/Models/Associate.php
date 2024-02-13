<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'associates';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'salary',
        'department_id'
    ];

    public function department(){
        return $this->belongsTo('App\Models\Department', 'department_id');
    }
}
