<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class HomePage extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'home_pages';
protected $fillable = [
		'id',
		'admin_id',
		      'main_preghraph_ar',
'main_preghraph_en',
'sub_preghraph_ar',
'sub_preghraph_en',
'Where_we_work_ar',
'Where_we_work_en',
'about_say_ar',
'about_say_en',
'write_about_us_ar',
'write_about_us_en',
'Key_word',
'Discraption_site',
		'created_at',
		'updated_at',
		'deleted_at',
	];

}
