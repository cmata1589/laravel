@extends('layout')
@section('content')

<div class="card bg-dark text-white">
       <img src="https://www.conicaltravel.com/wp-content/uploads/2020/03/4.-Myanmar-Conical-Travel-1911x695.jpg" class="card-img" alt="...">
      <div class="card-img-overlay">
            <h5 class="card-title">The Best Travel Blog</h5>
      </div>
  </div>
   
        <div class="row justify-content-md-center"   >

        @foreach ($places as $place) 
                
                    <div class="card" style="width: 18rem;">
                    
                            <img src="{{$place['url']}} " class="card-img-top" alt="..." style="height:200px">
                            
                            <div class="card-body">
                                <h5 class="card-title">{{$place['name']}}</h5>
                                <a href="/places/{{$place['id']}}" class="btn btn-primary">Expand</a>
                                
                            </div>
                    </div>
         @endforeach    
    

         </div>
<!-- Footer -->
<footer class="page-footer font-small cyan bg-dark">

<!-- Footer Elements -->
<div class="container">

  <!-- Grid row-->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12 py-5">
      <div class="mb-5 flex-center">

        <!-- Facebook -->
        <a class="fb-ic">
          <i class="text-light"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fab fa-twitter fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic">
          <i class="fab fa-google-plus-g fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic">
          <i class="fab fa-linkedin-in fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
          <i class="fab fa-instagram fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Pinterest-->
        <a class="pin-ic">
          <i class="fab fa-pinterest fa-lg text-white fa-2x"> </i>
        </a>
      </div>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row-->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3" style="color:#fff">© 2020 Copyright:
  <a > My Digital Consulting</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->


</div>
@endsection