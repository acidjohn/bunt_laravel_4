@extends('admin.templates.main')
@section('content')
<h1>Welcome {{Confide::user()->username}}</h1>
<?$band = Band::find(17);?>

<img src="{{URL::to('/')}}/bandmedia/{{$band->name}}/profileimage/{{$band->name}}.jpg">
@endsection