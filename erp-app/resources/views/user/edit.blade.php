@extends('layouts.layout')

@section('title', 'User Create')

@section('content')
{{-- Conteudo --}}

<div class="container shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="margin-top: 150px">

    @if (session('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong></strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif


    <div class="alert alert-warning" role="alert">
        <h5>Atenção ao atualizar o cadastro</h5>
    </div>

    
    <form class="row g-3 needs-validation" method="POST" action="{{ route('user.update', $user->id) }}">
        
        @csrf

        @method('PUT')
        
        <div class="col-md-6">

          <label for="validationCustom01" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="validationCustom01" name="nomecompleto" value="{{ $user['nomecompleto'] }}" required>
    
        </div>

        <div class="col-md-6">

          <label for="validationCustom02" class="form-label">Email</label>
          <input type="email" class="form-control" id="validationCustom02" name="email" value="{{ $user['email'] }}" required>
         
        </div>
        
        <div class="col-md-4">

          <label for="validationPassword03" class="form-label">Senha</label>
          <input type="password" class="form-control" id="validationPassword03" name="senha"  required>
          
        </div>

        <div class="col-md-4">

          <label for="validationCustom04" class="form-label">Qual Setor?</label>
          <select class="form-select" id="validationCustom04" name="setor" required>
            <option value="{{ $user['setor'] }}">{{ $user['setor'] }}</option>
            <option>Administrativa</option>
            <option>Comercial</option>
            <option>Contabilidade</option>
            <option>Logistica</option>
            <option>Marketing</option>
            <option>Recursos Humanos</option>
            <option>Tecnologia da informação</option>
            <option>Produção/Manufatura</option>
            <option>Juridico</option>
            <option>Atendimento ao cliente</option>
            <option>Financeiro</option>
            <option>Compras</option>
            <option>Vendas</option>
            <option>Gestão de Processos</option>
          </select>
          
        </div>

        <div class="col-md-4">

          <label for="validationCustom05" class="form-label">Qual Função?</label>
          <select class="form-select" id="validationCustom04" name="funcao" required>
            <option value="{{ $user['funcao'] }}">{{ $user['funcao'] }}</option>
            <option>Diretor(a)</option>
            <option>Coordenador</option>
            <option>Gerente</option>
            <option>Supervisor(a)</option>
            <option>Consultor</option>
            <option>Técnico</option>
            <option>Lider de setor</option>
            <option>Designer</option>
            <option>Mídias Sociais</option>
            <option>Auditor</option>
            <option>Analista</option>
            <option>Assistente</option>
            <option>Auxiliar</option>
            <option>Vendedor(a)</option>
            <option>Comprador(a)</option>
          </select>

        </div>
        
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Atualizar Cadastro</button>
        </div>
      </form>
</div>    
@endsection