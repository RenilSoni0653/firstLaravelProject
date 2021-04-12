@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="/post" enctype="multipart/form-data">
@csrf
<div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label text-md-right">Caption</label>

                            <div class="col-md-6">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>    

                        <div>
                             <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                             
                                <input type="file" name="image">
                                @error('image')
                                    
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                        </div>

                        <div class="row pt-3 pl-3">
                            <button class="btn btn-primary">Submit</button>
                        </div>
</form>
</div>
@endsection