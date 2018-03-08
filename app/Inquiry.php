<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $table = 'inquiries';
    protected $fillable = array('id', 'name', 'email', 'message', 'topic');
}
