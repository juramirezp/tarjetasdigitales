<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable=['Name', 'Responsabilities', 'Description', 'Address', 'Email', 'Phone', 'Website'];
}
