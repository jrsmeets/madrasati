@extends('layouts.app')

@section('title')
    {{$title}}
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
    @if ($list)
        <table class="table">
            <tr><th>Sana</th><th>Delete</th></tr>
        @foreach ($list as $item)
            <tr><td>{{$item->sana}}</td>
                <td><form action="{{ route('sanawaat.destroy', ['id' => $item->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">DEL</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </table>
    @else
        List is empty
        @endif
    <a href="{{ route('sanawaat.create') }}" class="btn btn-primary">New</a>
@stop