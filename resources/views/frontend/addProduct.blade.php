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
              Add Product
              </li>
            </ul>
            <p class="text-lighten mb-0">
            Let's set up your product page together. Start on the inventory admin. Click “Products” then click “Add product.” There are two pillars of an effective product ...

            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /page title -->

    <!-- contact -->
    <section class="section bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="section-title"> Add Product</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 mb-4 mb-lg-0">
          <form action="product_Submit" method="post" enctype="multipart/form-data">
             @csrf              
                <input
                type="text"
                class="form-control mb-3"
                id="name"
                name="product_name"
                placeholder="Product Name"
                required
              />
              <input
                type="number"
                class="form-control mb-3"
                id="mail"
                name="product_price"
                placeholder="Product Price"
                required
              />
              <input
                type="text"
                class="form-control mb-3"
                id="subject"
                name="product_quantity"
                placeholder="Product Quantity"
                required
              />
              <textarea
                name="product_description"
                id="message"
                class="form-control mb-3"
                placeholder="Product Description"
                required
              ></textarea>
              <div class="control-group ">
                    <label class="control-label">image Upload</label>
                    <div class="controls">
                        <input type="file" name="product_image" required>
                    </div>
                </div>
                <br/>
              <button type="submit" value="send" class="btn btn-dark">
                Add Product
              </button>
            </form>
          </div>
        
        </div>
      </div>
    </section>
    <!-- /contact -->


   
</div>
@endsection()