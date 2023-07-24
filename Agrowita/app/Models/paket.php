<?php

namespace App\Models;

use App\trait\HasformatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    use HasFactory;
    use HasformatRupiah;
    protected $table = "paket";
    protected $fillable = ['kegiatan', 'detail', 'harga', 'minimal', 'foto', 'status', 'id_kategori'];
}
