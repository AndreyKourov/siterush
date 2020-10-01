@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')

<div class="row">
    <div class="col">
    @if($id == 1)
        <h1 class="text-center text-break">About us</h1>
        <hr>
        @if($id == 1)
            @foreach($block as $block)
                <h3>{{$block -> title}}</h3>

                @if($block -> imagepath !=='')
                    <img src="{{ asset($block->imagepath) }}" class="img-fluid" style="height: 200px;"  alt="">
                @endif

                <p class="lead">{{ $block -> content }}</p>

                {!! Form::open(['route'=>['admin.destroy', $block->id]]) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                {!! Form::close() !!}

                <a href="{{ url('admin/'.$block->id.'/edit') }}" class="btn btn-success">Edit</a>
            @endforeach
        @endif
    @endif    
    </div>
</div>
    
@endsection

@section('footer')
    @parent
@endsection
