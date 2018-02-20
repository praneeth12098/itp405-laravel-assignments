<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $primaryKey = 'InvoiceId';
    public $timestamps = false;


    public function Customer() {
    	return $this->belongsTo('App\Customer', 'CustomerId');
    }

    public function InvoiceItems() {
    	return $this->hasMany('App\InvoiceItem', 'InvoiceId');
    }
}
