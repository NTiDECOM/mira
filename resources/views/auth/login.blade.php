@extends('layouts.blank')

@section('content')
<div class="block-center mt-xl wd-xl">
   <!-- START panel-->
   <div class="panel panel-dark panel-flat">
      <div class="panel-heading text-center">
         <h2>Autenticação</h2>
      </div>
      <div class="panel-body">
         <p class="text-center pv">FAÇA LOGIN PARA CONTINUAR.</p>
         <form role="form" data-parsley-validate="" method="POST"
         action="{{ url('/login') }}" novalidate="" class="mb-lg">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
               <input id="email" name="email" type="email" placeholder="Email"
               value="{{ old('email') }}" required class="form-control">
               <!-- <span class="fa fa-envelope form-control-feedback text-muted"></span> -->
               @if ($errors->has('email'))
                   <span class="help-block">
                       <strong>{{ $errors->first('email') }}</strong>
                   </span>
               @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
               <input id="password" type="password" placeholder="Senha" name="password" required class="form-control">
               <!-- <span class="fa fa-lock form-control-feedback text-muted"></span> -->
               @if ($errors->has('password'))
                   <span class="help-block">
                       <strong>{{ $errors->first('password') }}</strong>
                   </span>
               @endif
            </div>
            <div class="clearfix">
               <div class="checkbox c-checkbox pull-left mt0">
                  <!-- <label>
                     <input type="checkbox" value="" name="remember">
                     <span class="fa fa-check"></span>Remember Me</label> -->
               </div>
               <div class="pull-right"><a href="{{ url('/password/reset') }}" class="text-muted">Esqueceu sua senha?</a>
               </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary mt-lg">Entrar</button>
         </form>
      </div>
   </div>
   <!-- END panel-->
</div>
@endsection
