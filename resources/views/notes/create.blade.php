@extends('layout')
@section('content')
<h1>Create a note</h1>
     @include('partials/errors')
    <form method="post" action="{{url('notes')}}" class="form">
        {!! csrf_field() !!}
        <textarea name="note" class="form-control">{{old('note', '')}}
        </textarea>
        <button type="submit" class="btn btn-primary">Create note</button>
    </form>
@endsection 