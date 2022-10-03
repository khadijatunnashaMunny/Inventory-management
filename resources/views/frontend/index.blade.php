@extends('frontend.master')
@section('content')
  <div>
   <!-- Modal -->
   <div
      class="modal fade"
      id="signupModal"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
    
      
    </div>

    <!-- page title -->
    <section
      class="page-title-section overlay"
      data-background="images/backgrounds/page-title.jpg"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <ul class="list-inline custom-breadcrumb mb-2">
              <li class="list-inline-item">
                <a class="h2 text-primary font-secondary" href="index.html"
                  >Home</a
                >
              </li>
              <li class="list-inline-item text-white h3 font-secondary nasted">
              Product
              </li>
            </ul>
            <p class="text-lighten mb-0">
            Inventory portal is a centralised virtual repository of surplus inventory directly from the drillers for the drillers.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /page title -->

    <!-- about us -->
    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2 order-md-1">
            <h2 class="section-title">About Inventory portal</h2>
            <p>
            ITS Inventory makes it easy to collect, integrate and enrich infrastructure data. Try ITS Inventory demo to experience the benefits for your company.
            </p>
            <p>
            Visibility from the moment items are distributed to the field, to when they are returned. Sitehound offers you full visibility on items on their journey including compliance. 
            </p>
          </div>
          <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
            <img
              class="img-fluid w-100"
              src="images/about/about-us.jpg"
              alt="about image"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- /about us -->
  
    <!-- teachers -->
    <section class="section">
   

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="section-title">Our products</h2>
          </div>
             
          @php
          $product_lists=DB::table('products')->get();
        @endphp

        @if($product_lists)
        @foreach($product_lists as $product)
           <!-- teacher -->
           <a href="/product_detail/{{$product->id}}">

          <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="card border-0 rounded-0 hover-shadow">
              <img
                class="card-img-top rounded-0" height="200px" width="150px"
                src="{{ asset('uploads/images/'.$product->product_image) }}"
                alt="course thumb"
              />
              <div class="card-body">
                <a href="/product_detail/{{$product->id}}">
                  <h4 class="card-title">{{$product->product_name}}</h4>
                  <h6 class="card-title">{{$product->product_price}}</h6>

                </a>
                <div class="d-flex justify-content-between">
                  <span> </span>
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a>({{$product->product_quantity}} Items available)</a>
                    </li>
                   
                   
                   
                  </ul>
                  <a href="/edit/{{$product->id}}">
                    <button class="btn btn-dark">Edit</button>
                  </a>    
                  <a href="/delete/{{$product->id}}">
                  <button class="btn btn-dark">Delete</button>                  
                </a>
                </div>
              </div>
            </div>
          </div>
          </a>
          @endforeach
        @endif
         
        </div>
      </div>
     
    </section>
    <!-- /teachers -->
   
    


</div>
@endsection()