@extends('layouts.app')

@section('title')
    {{$title}} - New
@stop
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('sanawaat.store')}}" method="POST">
        {{ csrf_field() }}
        Sana <input type="text" name="sana" value="{{$sana}}"/>
        <input type="submit" class="btn btn-primary" value="Add" />
    </form>
@stop