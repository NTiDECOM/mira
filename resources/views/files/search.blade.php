@extends('layouts.search')

@section('title', 'Usuários')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h3>Busca Avançada de Mídias</h3>
            <form role="form" method="GET" action="/busca" class="form-horizontal">
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Título</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Título do áudio" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="autor" class="col-sm-2 control-label">Autor</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor do audio">
                    </div>
                </div>
                <div class="form-group">
                    <label for="type" class="col-md-2 control-label">Tipo da Mídia</label>
                    <div class="col-sm-6">
                        <select id="type" class="form-control" name="type">
                            <option value="blank">Selecionar</option>
                            <option value="PA">Palestra</option>
                            <option value="MU">Música</option>
                            <option value="PR">Programa</option>
                            <option value="SE">Seminário</option>
                            <option value="EN">Entrevista</option>
                            <option value="AC">Áudio Curto</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fa fa-search" aria-hidden="true"></i>&nbsp
                            Buscar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if($files)
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Tipo de Mídia</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($files as $file)
                        <tr>
                            <td>{{ $file->id }}</td>
                            <td>{{ $file->title }}</td>
                            <td>{{ $file->author }}</td>
                            <td>
                                @if($file->type == "PA")
                                    {{ "Palestra" }}
                                @elseif($file->type == "MU")
                                    {{ "Música" }}
                                @elseif($file->type == "PR")
                                    {{ "Programa" }}
                                @elseif($file->type == "SE")
                                    {{ "Seminário" }}
                                @elseif($file->type == "EN")
                                    {{ "Entrevista" }}
                                @elseif($file->type == "AC")
                                    {{ "Áudio Curto" }}
                                @endif
                            </td>
                            <td class="action-column text-right">
                                <a href="{{ url('/download') . '/' . $file->stored_name . '/' . $file->name }}" class="btn btn-success">
                                    <i class="fa fa-download" aria-hidden="true"></i>&nbsp
                                    Baixar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
