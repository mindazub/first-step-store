{{ Form::open(['method' => 'get', 'route' => 'search']) }}

  {{ Form::input('search', 'query', Input::get('query', ''))}}
  {{ Form::submit('Filter results') }}

{{ Form:: close() }}