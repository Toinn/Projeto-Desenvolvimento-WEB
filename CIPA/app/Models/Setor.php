<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{

    protected $table = 'setores';
    protected $_fillable = ['setor', 'descricao'];
}