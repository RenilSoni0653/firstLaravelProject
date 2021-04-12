@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div col-3 p-5>
            <img src="">
        </div>

        <div class="col-9 pt-5">
            <div>
                <div>
                    {{ $user->username }}
                    <a href="/post/create">Add Post</a>
                </div>
                <div class="d-flex">
                    <div><strong>1</strong></div>
                    <div>2</div>
                    <div>3</div>
                </div>
            </div>
            <div>
                {{ $user->profile->title }}
            </div>
            <div>{{ $user->profile->description }}</div>
            <div>{{ $user->profile->url ?? 'N/A' }}</div>
        </div>
    </div>
</div>
@endsection
