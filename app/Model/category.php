<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class category extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'categories';
protected $fillable = [
		'id',
		'admin_id',
		      'category_ar',
'category_en',
		'created_at',
		'updated_at',
		'deleted_at',
	];

}
