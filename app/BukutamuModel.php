<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BukutamuModel extends Model
{
    use Notifiable;

	protected $table    = 'guestbook';
    protected $fillable = ['nama', 'alamat', 'pesan'];
}
