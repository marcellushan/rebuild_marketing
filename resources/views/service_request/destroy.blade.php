@extends('layouts.app') @section('content')

    <form method="POST" action="{{URL::to('/')}}/service_request/9" accept-charset="UTF-8">
        <input name="_method" type="hidden" value="DELETE">
        {{ csrf_field() }}
        <input class="btn btn-danger" type="submit" value="Delete">
    </form>

@endsection
