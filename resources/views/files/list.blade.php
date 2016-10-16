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
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($files as $file)
                                <tr>
                                    <td>{{ $file->id }}</td>
                                    <td>{{ $file->title }}</td>
                                    <td>{{ $file->author }}</td>
                                    <td>{{ \Carbon\Carbon::parse($file->created_at)->format("d/m/Y h:i:s a") }}</td>
                                    <td><a href="{{ url('/download') . '/' . $file->stored_name . '/' . $file->name }}">Download</a></td>
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
