@extends('admin.layouts.main')
@section('content')

<section id="column-selectors">
    <div class="row">

        <div class="col-12">

            <div class="card">

<div class="container">

<div class="row">
    <div class="col-3">

    </div>
    <div class="col-6" style="
    padding: 18px;
">
@if(session()->has('success'))
<div style="    background: black;color: red;" class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

                <div class="card-content">
                    <form method="POST" action="{{ route('update') }}">
                        @csrf

                    <div class="row form-group">
                        <h1 style="margin-block: 18px">Edit Buyer</h1><br>


                      </div>



                      <input type="hidden" value="buyer" name="role">
                      <input type="hidden" name="idd"value="{{$users->id}}" >

                      <div class="row form-group">
                        <div class="col-md-12">
                          <label class="text-black"  style="font-size: 14px" for="fname"> Name</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$users->name}}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                      </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black"   style="font-size: 14px" for="email">Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$users->email}}" required autocomplete="email">

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" style="font-size: 14px" for="subject">Phone</label>
                  <input id="Phone" type="text" class="form-control" value="{{$users->phone}}" name="Phone" required >

                </div>
              </div>

                      <button type="submit" class="btn btn-primary" >Update</button>



                    </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
            </div>

        </div>

</section>
@endsection

