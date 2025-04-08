<?php

namespace App\Livewire\Admin\Funcionario;

use App\Models\Funcionario;
use Livewire\Component;

class FuncionarioIndex extends Component
{
    public function render()
    {

        $funcionarios = Funcionario::all();

        return view('livewire.admin.funcionario.funcionario-index',
        compact('funcionarios')); // -> pega os dados da variavel e envia pra view

    }
}
