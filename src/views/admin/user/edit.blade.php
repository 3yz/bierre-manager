@section('content')
<div>
  <hr>
  <ul class="breadcrumb">
    <li>
      {{ link_to_route('admin.dashboard', 'Home') }} <span class="divider">/</span>
    </li>
    <li>
      {{ link_to_route('admin.user.index', 'Usuários') }}
    </li>
  </ul>
  <hr>
</div> 
{{ Notification::showAll() }}
<div class="row-fluid">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="icon-edit"></i><span class="break"></span>Incluir</h2>
    </div>
    <div class="box-content">
    {{ Form::model($user, array('route' => array('admin.user.update', $user->id), 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}
    @include('manager::admin.user._form')
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::close() }}
    </div>
  </div><!--/span-->

</div><!--/row-->
@stop