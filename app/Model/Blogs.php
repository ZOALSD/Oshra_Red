<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Blogs extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'blogs';
protected $fillable = [
		'id',
		'admin_id',
		      'blog_title_ar',
'blog_title_en',
'blog_ar',
'blog_en',
'blog_img',
'blog_date',
'Disc',
'keyword',
'p_color',
'img_color',
'youtube_link',
		'created_at',
		'updated_at',
		'deleted_at',
	];

}
