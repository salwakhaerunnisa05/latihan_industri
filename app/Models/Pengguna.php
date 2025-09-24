<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

        //kolom atau field yang boleh di isi 
        protected $fillable = ['id', 'nama_pengguna', 'nomor_telepon', 'email', 'jenis_kelamin'];
        public $timestamp   = true;
}
