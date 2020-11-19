@extends('layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post a Place</div>

                <div class="card-body">
                    <form method="POST" action="/store">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Country/City name</label>

                            <div class="col-md-6">
                            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="name" id="name">

                            @error('name')
                                 <p class="invalid-feedback"> {{ $errors->first('name')}}</p>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">Image URL</label>

                            <div class="col-md-6">
                            <input type="text" class="form-control {{ $errors->has('url') ? 'is-invalid' : ''}}" name="url" id="url" >

                                @error('url')
                                    <p class="invalid-feedback"> {{ $errors->first('url')}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                               
                                <input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" name="description" id="description" >

                                    @error('description')
                                        <p class="invalid-feedback"> {{ $errors->first('description')}}</p>
                                    @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
                
            
            
    
@endsection