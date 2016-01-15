<?php

namespace Edutrans;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $table="mensagens";

    protected $fillable = ['mensagem'];

    public function historicoMensagens()
    {
    	return $this->hasMany(\Edutrans\HistoricoMensagem::class);
    }
}
