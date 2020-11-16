@extends('places.layout')

@section('content')

<div width= 20px>
    
    <form method="POST" action="/store">
            @csrf
            <div class="form-group">
                <label class="h4" for="countryName">Country/City name</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="name" id="name">

                @error('name')
                    <p class="invalid-feedback"> {{ $errors->first('name')}}</p>
                @enderror
                
            </div>

            <div class="form-group">
                <label class="h4" for="imagUrl">Url</label>
                <input type="text" class="form-control {{ $errors->has('url') ? 'is-invalid' : ''}}" name="url" id="url" >

                @error('url')
                    <p class="invalid-feedback"> {{ $errors->first('url')}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="h4" for="description">description</label>
                <input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" name="description" id="description" >

                @error('description')
                    <p class="invalid-feedback"> {{ $errors->first('description')}}</p>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection