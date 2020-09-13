<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class City extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'cities';
protected $fillable = [
		'id',
		'admin_id',
		              'conutry_id',
'conutry_id',

'city_ar',
'city_en',
		'created_at',
		'updated_at',
		'deleted_at',
	];

   public function conutry_id(){
      return $this->hasOne(\App\Model\Country::class,'id','conutry_id');
   }

}
