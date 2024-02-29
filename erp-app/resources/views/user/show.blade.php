@extends('layouts.layout')

@section('title', 'User Create')

@section('content')
{{-- Conteudo --}}


<div class="container " style="margin-top: 120px">

    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-people-fill"></i> Numero de usuarios</h5>
          <br>
          <p class="card-text">Total: {{ $totalUsers }}</p>
          
        </div>
      </div>
      

      <hr>

    @foreach ($users as $user)
    <div class=" shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-body">
            <div class="row g-3 needs-validation">

                <div class="col-md-12">
                    
                    <label for="validationCustom01" class="form-label">

                        <i class="bi bi-person-vcard"></i>  {{ $user->nomecompleto }}<br>
                    
                    </label> 
    
                </div>
                
                <div class="col-md-1">
        
                  <label for="validationCustom01" class="form-label">
                    <strong>Matricula:</strong><br>
                    {{ $user->id }}
                  </label>                 
            
                </div>
        
                <div class="col-md-2">
        
                    <label for="validationCustom01" class="form-label">
                        <i class="bi bi-calendar-check"></i><strong style="margin-left: 10px">Criação:</strong><br>
                        {{ $user->created_at }} 
                    </label>                  
                                  
                </div>
                
                <div class="col-md-2">

                    <label for="validationCustom01" class="form-label">
                        <i class="bi bi-calendar-check"></i><strong style="margin-left: 10px">Atualização:</strong><br>
                        {{ $user->updated_at }} 
                    </label> 
                 
                </div>
        
                  
                <div class="col-md-2">
        
                    <label for="validationCustom01" class="form-label">
                        <i class="bi bi-building"></i> <strong>Setor:</strong><br>
                        {{ $user->setor }} 
                    </label> 
        
                </div>

                <div class="col-md-2">
        
                    <label for="validationCustom01" class="form-label">
                        <i class="bi bi-briefcase"></i> <strong style="">Cargo:</strong><br>
                        {{ $user->funcao }} 
                    </label> 
        
                </div>

                <div class="col-md-1">
        
                    <label for="validationCustom01" class="form-label">
                        <strong>Editar</strong><br>
                        <a href="{{ route('user.edit', $user->id) }}"><i class="bi bi-pencil-square" style="cursor: pointer"></i></a>
        
                </div>

                <form class="col-md-1" method="POST" action="{{ route('user.destroy', $user->id) }}">
                    @csrf
                    @method('DELETE')
                    <label for="validationCustom01" class="form-label">
                        <strong>Excluir</strong><br>
                    <button type="submit" style="background: none; border: none;"><i class="bi bi-trash3" style="cursor: pointer; color: red"></i></button>
                </form>
                
               
            </div>
        </div>
    </div>
    
      @endforeach
     {{-- <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{ $users->links() }}
        </ul>
        </nav> --}}
       
</div>



{{-- <div class="container" style="margin-top: 300px">

    <table border="1">
        <tr>
            <td>Id</td>
            <td>Criado</td>
            <td>Atualizado</td>
            
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
           
        </tr>
        @endforeach
    </table>
</div> --}}

@endsection