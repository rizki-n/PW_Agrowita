<?php

namespace App\trait;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

trait HasformatRupiah{
    function formatRupiah($field, $prefix = null){
        $prefix = $prefix ? $prefix : 'Rp. ';
        return $prefix . number_format($this->attributes[$field], 0, ',', '.');
    }
}