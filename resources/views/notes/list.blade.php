@extends('layout')
@section('content')
        <div class="flex-center position-ref full-height">
           <a href="{{ url('notes/create') }}">Add a notes</a>
           
           <ul>
            @foreach($notes as $note)
            <li>
              {{ $note->note }}
            </li>
            @endforeach
           </ul>
        </div>
@endsection        