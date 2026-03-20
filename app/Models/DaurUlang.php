<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaurUlang extends Model {
    protected $table = 'daur_ulang';
    protected $fillable = ['user_id', 'foto_kemasan', 'qr_code', 'koin'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}