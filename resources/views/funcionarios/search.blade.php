<table class="table table-hover table-bordered user">
    <tbody>
        @foreach ($users as $user )
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>@if ($user->perfil=== 'admin')
             <ul>Administrador </ul>
             @else ($user->perfil!= 'admin')
             <ul>Funcionario</ul>
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
    </tbody>
</table>
