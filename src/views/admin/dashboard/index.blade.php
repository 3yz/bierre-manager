@section('content')

<div>
  <hr>
  <ul class="breadcrumb">
    <li>
      <a href="#">Home</a> <span class="divider">/</span>
    </li>
    <li>
      <a href="#">Dashboard</a>
    </li>
  </ul>
  <hr>
</div>

<div class="hero-unit">
  <h1>Dashboard</h1>
  <p>Olá <strong>{{ $user = Sentry::getUser()->first_name }} {{ $user = Sentry::getUser()->last_name }}</strong>! Seja bem-vindo ao sistema de gerenciamento do site.</p>  
</div>

@stop