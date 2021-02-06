<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'contacts';
    protected $fillable = [
        'id',
        'name',
        'email',
        'message',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
