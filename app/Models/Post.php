<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //especifica a tabela a qual devemos trabalhar
//    protected $table = 'artigos';

    //sempre pega o campo id como primario
//    protected $primaryKey = 'id';

    //por padrão vem ativado o timestamps - voce pode desabilitar
//    public $timestamps = true;

    //as duas colunas por padrão podem ser alteradas - dentro da migration é necessario criar na mao as colunas com $table->timestamps('nomes')->nullable()
//    public const CREATED_AT = "criado_em";
//    public const UPDATED_AT = "atualizado_em";


//campos permitidos para cadastro
    protected $fillable = ['title', 'subtitle', 'description'];
    //campos bloqueados para cadastro
    protected $guarded = [];
}
