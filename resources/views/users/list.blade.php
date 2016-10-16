@extends('layouts.app')

@section('title', 'Usuários')

@section('content')

    <div class="content-wrapper">
        <div class="content-heading">
            Usuários
            <!-- <small data-localize="dashboard.WELCOME"></small> -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="{{ action('UserController@create') }}" class="btn btn-primary pull-right btn-add-user">Adicionar</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Usuários
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Data Registro</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ \Carbon\Carbon::parse($user->created_at)->format("d/m/Y") }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
