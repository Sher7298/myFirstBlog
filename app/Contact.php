<?php

namespace App;
// for encryption
use Illuminate\Support\Facades\Crypt; 
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // protected $table ='contacts';
     protected $fillable = [
     	'name',
     	'email',
     	'subject',
     	'message',
     ];
     // public function setName($value){
     // 	$this->attributes['name'] = Crypt::encryptString($value);
     // }
     // public function getName($value){
     // 	return Crypt::decryptString($value);
     // }

}
