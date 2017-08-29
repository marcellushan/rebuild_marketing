@extends('layouts.app') @section('content')

    <form method="POST" action="{{URL::to('/')}}/service_request/{{$serviceRequest->id}}" accept-charset="UTF-8">


        <input name="_method" type="hidden" value="DELETE">
        {{ csrf_field() }}

        <h2>The Service request for {{$serviceRequest->customer->name}} is about to be deleted!!</h2>
        <input class="btn btn-danger" type="submit" value="Delete">
    </form>

@endsection
