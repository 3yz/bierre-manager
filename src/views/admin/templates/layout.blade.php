<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <title><?php //echo $title ?></title>
    <meta name="author" content="3yz">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ HTML::style('packages/tresyz/manager/css/bootstrap.css', array('id' => 'bootstrap-style')); }}
    {{ HTML::style('packages/tresyz/manager/css/bootstrap-responsive.css'); }}
    {{ HTML::style('packages/tresyz/manager/css/style.css', array('id' => 'base-style')); }}
    {{ HTML::style('packages/tresyz/manager/css/style-responsive.css', array('id' => 'base-style-responsive')); }}
    <base href="<?php //echo URL::base(TRUE) ?>" />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE]><!--> <style>#overlay { display:none;}</style> <!--<![endif]-->
  </head>

  <body>
    <div id="overlay">
      <div class="loader">
        <?php echo HTML::image('packages/tresyz/manager/img/progress2.gif'); ?>
      </div>
    </div>  
    @if (Sentry::check())
    <!-- start: Header -->
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="{{ route('admin.dashboard') }}"> 
            <span class="hidden-phone">Manager</span>
          </a>
                  
          <!-- start: Header Menu -->
          <div class="nav-no-collapse header-nav">
            <ul class="nav pull-right">
              <!-- start: User Dropdown -->
              <li class="dropdown">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="icon-user icon-white"></i>
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <?php //echo HTML::anchor('manager/users/profile', '<i class="icon-user"></i> Perfil') ?>
                  </li>
                  <li>
                    {{ HTML::decode(link_to_route('admin.logout', '<i class="icon-off"></i> Sair')) }}
                  </li>
                </ul>
              </li>
              <!-- end: User Dropdown -->
            </ul>
          </div>
          <!-- end: Header Menu -->
        </div>
      </div>
    </div>
    <!-- start: Header -->
    @endif
  
    
    <div class="container-fluid">
      @if (Sentry::check())
      <div class="row-fluid">        
        <!-- start: Main Menu -->
        <div class="span2 main-menu-span">
          <div class="nav-collapse sidebar-nav">
            @section('menu')
              @include('manager::admin.templates._menu')
            @show
          </div><!--/.well -->
        </div><!--/span-->
        <!-- end: Main Menu -->        

        <!-- start: Content -->
        <div id="content" class="span10">
          @yield('content')
        </div><!--/#content.span10-->
        <hr>
      </div><!--/fluid-row-->
        
      {{ Form::open(array('method' => 'post', 'id' => 'delete-form')) }}
      <div class="modal hide fade" id="delete-modal">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h3>Apagar</h3>
        </div>
        <div class="modal-body">
          <p>Deseja realmente excluir esse registro?</p>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn" data-dismiss="modal">Fechar</a>
          {{ Form::submit('Confirmar', array('id' => 'confirm-link', 'class' => 'btn btn-danger')) }}
          {{ Form::hidden('_method', 'delete') }}
        </div>
      </div>
      {{ Form::close() }}
    
      <div class="clearfix"></div>
    
      @else
      <div class="row-fluid">
        <div class="row-fluid">
          <style type="text/css">
            body { background: url({{ URL::asset('packages/tresyz/manager/img/bg-login-3yz.jpg') }}) !important; }
          </style>
          @yield('content')
        </div>
      </div>
      @endif
    </div><!--/.fluid-container-->

    <!-- start: JavaScript-->
    {{ HTML::script('packages/tresyz/manager/js/jquery-1.9.1.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery-migrate-1.0.0.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery-ui-1.10.0.custom.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.ui.touch-punch.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery-ui-timepicker-addon.js') }}
    {{ HTML::script('packages/tresyz/manager/js/bootstrap.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.cookie.js') }}
    {{ HTML::script('packages/tresyz/manager/js/fullcalendar.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.dataTables.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/excanvas.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.flot.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.flot.pie.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.flot.stack.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.flot.resize.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.chosen.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.uniform.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/tiny_mce/jquery.tinymce.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.noty.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.elfinder.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.raty.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.iphone.toggle.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.uploadify-3.1.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.gritter.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.imagesloaded.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.masonry.min.js') }}
    {{ HTML::script('packages/tresyz/manager/js/jquery.knob.js') }}
    {{ HTML::script('packages/tresyz/manager/js/custom.js') }}
    
  </body>
</html>
