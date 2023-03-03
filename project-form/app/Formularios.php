<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Formularios extends Model
{
   public $timestamps = false;
   protected $fillable = ['nome','email','telefone','cep','cpf','rua','numero','cidade','mensagem'];
}
