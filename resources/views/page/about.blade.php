@extends('master')
@section('content')

<!--About Us-->
<body>
@foreach($about as $a)
{!!$a->body!!}
@endforeach
</body>
@endsection