<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Tearninglearn extends Model
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
