<?php

namespace Edutrans;

use Illuminate\Database\Eloquent\Model;

class HistoricoMensagem extends Model
{
    protected $table = 'historico_mensagens';

    protected $fillable = ['placa','id_mensagem','latitude','longitude'];

    public function Mensagem()
    {
    	return $this->belongsTo(\Edutrans\Mensagem::class);
    }
}
