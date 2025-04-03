<div>
    <h1> administrador Logado😘</h1>

    <h4>{{auth()->user()->email}}</h4>
    <h4>{{auth()->user()->id}}</h4>
    <h4>{{auth()->user()->user_type}}</h4>
    <h4>{{auth()->user()->admin->cpf}}</h4>
    <h4>{{auth()->user()->admin->nome}}</h4>
    <h4>{{auth()->user()->admin->id}}</h4> 
    {{-- ele pegou as informações --}}

</div>
