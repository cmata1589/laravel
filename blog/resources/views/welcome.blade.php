
         @extends ('generalLayout')    

         

        @section('maincontent')
    
        <!-- <div class="card-group"> -->
        <div class="row justify-content-md-center"   >

        
           @foreach ($images as $image) 
                <!-- <div class="card"> -->
                    <div class="card" style="width: 18rem;">
                    
                            <img src="{{ $image['url'] }}" class="card-img-top" alt="..." style="height:200px">
                            
                            <div class="card-body">
                                <h5 class="card-title">{{ $image['name'] }}</h5>
                                <a href="/places/{{ $image['id'] }}" class="btn btn-primary">Expand</a>
                            </div>
                    </div>
                <!-- </div> -->
            @endforeach

      
        </div>
    </div>

    @endsection


    
