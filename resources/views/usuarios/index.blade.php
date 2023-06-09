@extends('layouts.base')
@section('content')

<div class="container">

    <h1>Usuarios</h1>
    <h2><a class="btn btn-dark" href="{{route('usuario.create')}}">Novo Usuario</a></h2>
    <p>{{$usuarios->links()}}</p>

    @if (Session::has('danger'))
        <div class="alert alert-danger">
            {!! Session::get('danger') !!}
        </div>
    @endif

    <table class="table table-border table-striped">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Criado em</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $usuarios as $usuario )


            <tr>
                <td>
                    <a class="btn btn-success" href="{{ route('usuario.show', ['id'=>$usuario->id]) }}">Ler</a>

                    <a class="btn btn-primary" href="{{ route('usuario.edit', ['id'=>$usuario->id]) }}" >Editar</a>

                    <a class="btn btn-danger" href="{{ route('usuario.destroy', ['id'=>$usuario->id]) }}" >Deletar</a>
                </td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->created_at->format('d/m/y')}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>


