<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Exemplo de atributo que poderia representar o ID do usuário que fez login
        'login_timestamp', // Exemplo de atributo que poderia representar o timestamp do login
        // Adicione outros atributos conforme necessário
    ];

    // Exemplo de relação com o model User (se necessário)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
