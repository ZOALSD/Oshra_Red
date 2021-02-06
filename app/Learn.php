<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learn extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'tearninglearns';
    protected $fillable = [
        'id',
        'admin_id',
        'main_image',
        'main_p_ar',
        'main_p_en',
        'Desc_search',
        'Key_word',
        'sup_p_ar',
        'sup_p_en',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
