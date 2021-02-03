<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BukutamuModel extends Model
{
    use Notifiable;

	protected $table    = 'bukutamu';
    protected $fillable = ['nama', 'alamat', 'pesan'];
}
