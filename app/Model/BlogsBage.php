<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class BlogsBage extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'blogs_bages';
protected $fillable = [
		'id',
		'admin_id',
		      'main_p_ar',
'main_p_en',
'sub_p_ar',
'sub_p_en',
'slide_image',
'other_image',
'youtube_link',
'disc',
'keyword',
'p_color',
'image_color',
		'created_at',
		'updated_at',
		'deleted_at',
	];

}
