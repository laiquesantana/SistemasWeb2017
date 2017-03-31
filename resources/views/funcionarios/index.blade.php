@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Usuários</div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered user">
                            <thead>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Perfil</th>
                                <th>Editar</th>
                                <th>Desabilitar</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user )
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>@if ($user->perfil=== 'user')
                                     <ul>Funcionario</ul>
                                     @else ($user->perfil!= 'admin')
                                     <ul>Administrador</ul>
                                     @endif
                                    </td>
                                    <td><a href="{{ route('funcionarios.edit',array($user->id))}}" class="btn btn-success"> Editar</a></td>
                                    <td> <form action="{{ route('funcionarios.destroy', $user->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Desabilitar
                                                </button>
                                    </form> </td>
                                </tr>
                                @endforeach
                                   {{ $users->links() }}
                            </tbody>
                       </table>

                    </div>
                          <!-- Modal -->


                </div>
            </div>
        </div>
    </div>
</div>
@endsection



