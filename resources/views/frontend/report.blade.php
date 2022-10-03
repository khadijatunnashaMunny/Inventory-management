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
            A report is a document that presents information in an organized format for a specific audience and purpose. 
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /page title -->
    <br/>
   
   
    <!-- courses -->
    <table class="table container">
  <thead  class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>

    </tr>
  </thead>
  @php
      $product_lists=DB::table('products')->get();
    @endphp

    @if($product_lists)
    @foreach($product_lists as $product)

  <tbody>
    <tr>
      <td>{{$product->product_name}}</td>
      <td>{{$product->product_description}}</td>
      <td>{{$product->product_quantity}}</td>
      <td> {{$product->product_price}} </td>
    </tr>
  
   
  </tbody>
  @endforeach
    @endif
</table>


    
    <!-- /courses -->

   <style>
     .button{
        height: 50px;
        width: 100px;
        padding:10px;
        margin-top:10px;
        border-radius:6px;
        text-align:center;
        align-items:center;
        background: #000;
        color:#fff;
        display:flex;
        justify-content:center;

      }
      a{
        text-decorate:none;
        text-align: center;

      }
      .button:hover{
       background: #fff;
       color:#000;
       border:1px solid #000;
     }
   </style>
   
    <a class="button container" href="{{route('pdf.convert')}}">Convert PDF</a>

</div>
@endsection()