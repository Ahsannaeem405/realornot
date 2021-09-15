
@extends('layouts.layouts')

@section('content')
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>




    @include('layouts.header')
    {{-- @dd($product); --}}



      <div class="container">

        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">

              <div class="col-12 ">

                <h2 class="site-section-heading text-center"> Product Detail</h2>
                <div class="site-section"  data-aos="fade">

              </div>
            </div>
          </div>

        </div>
        {{-- {{asset('/uploads/'.$express->photos) }} --}}
            <form action="{{route('product_status',[$product->id])}}">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <img src="{{asset('/uploads/'.$product->photos) }}" style=" border-radius: 25px;min-width: 77%;  width: 77%;" alt="">
          </div>
          <div class="col-lg-6 ml-auto">
            @if(Session::has('success'))
            <div class="alert alert-success" style="background: black; color:white">
            {{Session::get('success')}}
            </div>
            @endif
            <div class="mb-3">
              <h3 class="mb-0 font-weight-bold text-white"> Product Name</h3>
              <p class="mb-4" style="font-size: 20px;" > <a href="#">Air jardan </a></p>

              <p class="mb-0 font-weight-bold text-white">SKU</p>
              <p class="mb-4"><a href="#">{{$product->zip_No}}

            </a></p>

              <p class="mb-0 font-weight-bold text-white">Job ID</p>
              <p class="mb-0"><a href="#">{{$product->id}}

            </a></p>
            {{-- @dd($product->Brand->brand_name) --}}

            <p class="mb-0 font-weight-bold text-white">Brand</p>
            <p class="mb-0"><a href="#">{{$product->Brand->brand_name}}
                <p class="mb-0 font-weight-bold text-white">Comment</p>
            <p class="mb-0"><a href="#">{{$product->comment}}

          </a></p>
          <br><br>



          <select name="statuss" id="" class="form-control">

            <option value="1" @if($product->status_expert == '1')  selected @endif style="background: black"> Approve</option>
            <option value="0" @if($product->status_expert == '0')  selected  @endif style="background: black">Turn Down</option>
          </select>

        </a></p>

            <label for="">Comment</label>
            <textarea name="Comment" id="" value = "{{$product->comment}}" class="form-control" cols="10" rows="3">{{$product->comment}}</textarea>

          </select>
        </a></p>
        @if($product->status_expert == null)


        <button type="submit" class="btn btn-primary" > Submit </button>
@else
<button type="button" class="btn btn-primary" disabled> Submit </button>
@endif
      </select>
    </form>
    </a></p>


            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="footer py-4">

    </div>





  </div>

  @endsection
