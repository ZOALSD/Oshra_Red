<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Country extends Model {

	protected $dates = ['deleted_at'];

protected $table    = 'countries';
protected $fillable = [
		'id',
		'admin_id',
		      'country_ar',
'country_en',
		'created_at',
		'updated_at',
		'deleted_at',
	];

}