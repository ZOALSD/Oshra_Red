<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class OurWork extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'our_works';
protected $fillable = [
		'id',
		'admin_id',
		      'main_imig',
'main_p_ar',
'main_p_en',
'sub_p_ar',
'sub_p_en',
'what_our_do_ar',
'what_our_do_en',
'what_our_do_img',
'why_oshra_unique_ar',
'why_oshra_unique_en',
'why_oshra_unique_img',
'page_description',
'key_Word',
'p_color',
		'created_at',
		'updated_at',
		'deleted_at',
	];

}
