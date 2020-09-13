<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Causes extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'causes';
protected $fillable = [
		'id',
		'admin_id',
		              'category_id',
        'country_id',
'title_ar',
'title_en',
'disc_ar',
'disc_en',
'country_id',

'city_id',
'cause_data',
'category_id',

'disc_page',
'keyword',
'p_color',
'img_color',
'image',
'YouTube_link',
		'created_at',
		'updated_at',
		'deleted_at',
	];

   public function category_id(){
      return $this->hasOne(\App\Model\category::class,'id','category_id');
   }

   public function country_id(){
      return $this->hasOne(\App\Model\Country::class,'id','country_id');
   }

}
