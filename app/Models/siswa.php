<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
     use HasFactory;

        //kolom atau field yang boleh di isi 
        protected $fillable = ['id', 'nama_lengkap,jenis_kelamin', 'tanggal_lahir','kelas'];
        public $timestamp   = true;
}
