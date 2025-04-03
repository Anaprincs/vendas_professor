<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'user_id' // iremos fzr um relacionamento com a tabela de bancos
    ];

public function user(){
    return $this->belongsTo(User::class); // essa tabela possui UM user
}

}


