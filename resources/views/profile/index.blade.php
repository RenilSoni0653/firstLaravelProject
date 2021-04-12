@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div col-3 p-5>
            <img src="{{ $user->profile->profileImage() }}">
        </div>

        <div class="col-9 pt-5">
            <div>
                <div>
                    {{ $user->username }}
                    @can ('update',$user->profile)
                        <a href="/post/create">Add Post</a>
                    @endcan
                    
                    @can ('update',$user->profile)
                        <a href="{{ url('/profile/'.$user->id.'/edit') }}">Edit Profile</a>
                    @endcan
                </div>
                <div class="d-flex">
                    <div><strong>{{ $user->posts->count() }}</strong></div>
                    <div>1</div>
                    <div>3</div>
                </div>
            </div>
            <div>
            
                {{ old('title') ?? $user->profile->title }}
            </div>
            <div>{{ old('description') ?? $user->profile->description }}</div>
            <div>{{ old('url') ?? $user->profile->url  }}</div>
        </div>
    </div>
    <div>
    
        <table>
        <tr>
        @foreach($user->posts as $images)
            <td><a href="{{ url('post/'.$images->id.'/edit') }}"><img src= "/storage/{{ $images->image }}" class="p-5" style="width:200px; height:100px;" ></a></td>
        @endforeach
        </tr>
    </table>
    </div>
</div>
@endsection
