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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Adicionar Arquivo
                    </div>
                    <div class="panel-body">
                        {!! Form::open(array('action'=>'FileController@store','method'=>'POST', 'files'=>true, 'class'=> "form-horizontal")) !!}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Título</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus />

                                    @if ($errors->has('title'))
                                        <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                                <label for="author" class="col-md-4 control-label">Autor</label>

                                <div class="col-md-6">
                                    <input id="author" type="text" class="form-control" name="author" value="{{ old('author') }}" required />

                                    @if ($errors->has('author'))
                                        <span class="help-block"><strong>{{ $errors->first('author') }}</strong></span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="type" class="col-md-4 control-label">Tipo de Arquivo</label>

                                <div class="col-md-6">
                                    <select id="type" class="form-control" name="type" value="{{ old('type') }}" required>
                                        <option value="PA">Palestra</option>
                                        <option value="MU">Música</option>
                                        <option value="PR">Programa</option>
                                        <option value="SE">Seminário</option>
                                        <option value="EN">Entrevista</option>
                                        <option value="AC">Áudio Curto</option>
                                    </select>

                                    @if ($errors->has('type'))
                                        <span class="help-block"><strong>{{ $errors->first('type') }}</strong></span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('media') ? ' has-error' : '' }}">
                                <label for="media" class="col-md-4 control-label">Arquivo</label>

                                <div class="col-md-6">
                                    <input id="media" type="file" class="form-control" name="media" value="{{ old('media') }}" required />

                                    @if ($errors->has('media'))
                                        <span class="help-block"><strong>{{ $errors->first('media') }}</strong></span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
