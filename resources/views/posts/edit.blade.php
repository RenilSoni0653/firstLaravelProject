@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="{{ url('/post/'.$post->id) }}" enctype="multipart/form-data">
@csrf
<div class="form-group row"> 
                            <label for="caption" class="col-md-4 col-form-label text-md-right">Caption</label>

                            <div class="col-md-6">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ $post->caption }}" autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>    
                        <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                        <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $post->image }}" autocomplete="image" autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="row pt-3 pl-3">
                                <div class="pr-3">
                                    <form method="POST" action="url('/post/'.$post->id)">
                                    @method('DELETE')
                                    <button class="btn btn-primary">Delete</button>
                                    </form>
                                </div>
                            <button class="btn btn-primary">Submit</button>
                        </div>
</form>
</div>
@endsection