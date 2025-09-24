<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
        use HasFactory;

        //kolom atau field yang boleh di isi 
        protected $fillable = ['id', 'title', 'content'];
        public $timestamp   = true;
}
