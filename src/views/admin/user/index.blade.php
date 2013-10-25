@section('content')
<div>
  <hr>
  <ul class="breadcrumb">
    <li>
      <a href="{{ route('admin.dashboard') }}">Home</a> <span class="divider">/</span>
    </li>
    <li>
      {{ link_to('admin/users', 'Usuários') }}
    </li>
  </ul>
  <hr>
</div>

{{ Notification::showAll() }}

{{ link_to_route('admin.user.create', 'Adicionar', NULL, array('class' => 'btn btn-info')) }}

<div class="row-fluid">    
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="icon-list"></i><span class="break"></span>Listagem</h2>
      <!-- <div class="box-icon">
        <a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
        <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="icon-remove"></i></a>
      </div> -->
    </div>
    <div class="box-content">
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
          <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Tipo</th>
            <th class="actions">Ações</th>
          </tr>
        </thead>   
        <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              @foreach($user->groups as $group)
              <span class="label">{{ $group->name }}</span>
              @endforeach
            </td>
            <td class="actions">
              <!-- <a class="btn btn-success" href="#">
                <i class="icon-zoom-in icon-white"></i>  
              </a> -->
              {{ HTML::decode(link_to_route('admin.user.edit', '<i class="icon-edit icon-black"></i>', $user->id,  array('class' => 'btn'))) }}
              {{ HTML::decode(link_to_route('admin.user.destroy','<i class="icon-trash icon-white"></i>', $user->id, array('class' => 'btn btn-danger delete'))) }}
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>            
    </div>

  </div><!--/span-->

</div><!--/row-->
@stop