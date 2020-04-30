<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama_item', 'harga_item', 'lokasi', 'deskripsi', 'nama_file'];
}
