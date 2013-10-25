<fieldset>
  <div class="control-group {{$errors->has('first_name') ? 'error' : ''}}">
    {{ Form::label('first_name', 'Nome', array('class' => 'control-label')) }}
    <div class="controls">
      {{ Form::text('first_name', NULL, array('class' => 'input-xlarge')) }}
    </div>
  </div>
  <div class="control-group {{$errors->has('last_name') ? 'error' : ''}}">
    {{ Form::label('last_name', 'Sobrenome', array('class' => 'control-label')) }}
    <div class="controls">
      {{ Form::text('last_name', NULL, array('class' => 'input-xlarge')) }}
    </div>
  </div>
  <div class="control-group {{$errors->has('email') ? 'error' : ''}}">
    {{ Form::label('email', 'E-mail', array('class' => 'control-label')) }}
    <div class="controls">
      {{ Form::email('email', NULL, array('class' => 'input-xlarge')) }}
      <small class="help-block">Campo obrigatório. Máximo 255 caracteres</small> 
    </div>
  </div>
  <div class="control-group {{$errors->has('password') ? 'error' : ''}}">
    {{ Form::label('password', 'Senha', array('class' => 'control-label')) }}
    <div class="controls">
      {{ Form::password('password', NULL, array('class' => 'input-large')) }}
      <small class="help-block">Campo obrigatório. Mínimo de 8 caracteres</small> 
    </div>
  </div>
  <div class="control-group {{$errors->has('confirm') ? 'error' : ''}}">
    {{ Form::label('confirm', 'Confirme a Senha', array('class' => 'control-label')) }}
    <div class="controls">
      {{ Form::password('confirm', NULL, array('class' => 'input-large')) }}
      <small class="help-block">Campo obrigatório.</small> 
    </div>
  </div>
  <div class="control-group {{$errors->has('group_id') ? 'error' : ''}}">
    {{ Form::label('group_id', 'Grupo', array('class' => 'control-label')) }}
    <div class="controls">
      {{ Form::select('group_id', $groups, NULL, array('class' => 'input-large')) }}
      <small class="help-block">Campo obrigatório.</small> 
    </div>
  </div>
  <div class="control-group {{$errors->has('activated') ? 'error' : ''}}">
    {{ Form::label('activated', 'Ativo?', array('class' => 'control-label')) }}
    <div class="controls">
      <label class="radio">
        {{ Form::radio('activated', 1, NULL, array('class' => 'input-large')) }}
        Sim
      </label>
      <div style="clear:both"></div>
      <label class="radio">
        {{ Form::radio('activated', 0, NULL, array('class' => 'input-large')) }}
        Não
      </label>
      <small class="help-block">Campo obrigatório.</small> 
    </div>
  </div>
  
  <div class="form-actions">
    {{ Form::button('Salvar', array('type' => 'submit', 'class' => 'btn btn-info')) }}
    ou {{ link_to(URL::route('admin.user.index'), 'cancelar') }}
  </div>
</fieldset>