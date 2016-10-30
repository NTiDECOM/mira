@extends('layouts.app')

@section('title', 'Usuários')

@section('content')

    <div class="content-wrapper">
        <div class="content-heading">
            Arquivos
            <!-- <small data-localize="dashboard.WELCOME"></small> -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="{{ action('FileController@create') }}" class="btn btn-primary pull-right btn-add-file">Adicionar</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Arquivos
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Autor</th>
                                    <th>Data Registro</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($files as $file)
                                <tr>
                                    <td>{{ $file->id }}</td>
                                    <td>{{ $file->title }}</td>
                                    <td>{{ $file->author }}</td>
                                    <td>{{ \Carbon\Carbon::parse($file->created_at)->format("d/m/Y h:i:s a") }}</td>
                                    <td class="action-column">
                                        <a href="{{ url('/download') . '/' . $file->stored_name . '/' . $file->name }}" class="btn btn-success btn-xs">Download</a>
                                        <a href="{{ url('/arquivos') . '/' . $file->id . '/edit'}}" class="btn btn-warning btn-xs">Editar</a>
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'action' => ['FileController@destroy', $file->id]
                                        ]) !!}
                                        {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </td>
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
