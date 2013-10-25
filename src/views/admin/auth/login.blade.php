@section('content')

<div class="login-box">
  {{ Form::open(array('class' => 'form-horizontal')) }}
    <fieldset>      
      @if ($errors->has('login'))
      <div class="messages">
        <div class="alert alert-error">{{ $errors->first('login', ':message') }}</div>
      </div>
      @endif

      <div class="input-prepend" title="Username">
        <span class="add-on"><i class="icon-user"></i></span>
        {{ Form::text('email', null, array('id' => 'user_username', 'class' => 'input-large span10', 'placeholder' => 'E-mail')) }}
      </div>
      <div class="clearfix"></div>

      <div class="input-prepend" title="Password">
        <span class="add-on"><i class="icon-lock"></i></span>        
        {{ Form::password('password', array('id' => 'user_password', 'class' => 'input-large span10', 'placeholder' => 'Senha')) }}
      </div>
      <div class="clearfix"></div>
      
      <label class="remember" for="remember">
        {{ Form::checkbox('remember', 1, null, array('id' => 'remember')) }}
        Lembrar a senha?
      </label>

      <div class="button-login">  
        <button type="submit" class="btn btn-primary"><i class="icon-off icon-white"></i> Login</button>
      </div>
      <div class="clearfix"></div>
    </fieldset>
  {{ Form::close() }}
</div><!--/span-->

@stop