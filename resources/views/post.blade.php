@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($post as $item)
            <div class="col-12 mb-2">
                <div class="card">
                    <div class="card-header font-weight-bold">{{ $loop->iteration }}. {{ $item->title }}</div>
                    <div class="card-body">{{ $item->content }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
