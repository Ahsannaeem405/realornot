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
                        <h1 style="margin-block: 18px">Edit Seller</h1><br>

                        <div class="col-md-12">
                          <label class="text-black" for="fname" style="font-size: 14px;">Name</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $users->name }}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                      </div>

                      <div class="row form-group">

                        <div class="col-md-12">
                          <label class="text-black" for="email" style="    font-size: 14px;">Email</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $users->email }}" required autocomplete="email">
                          <input id="idd" type="hidden" class="form-control' " name="idd" value="{{ $users->id }}" required autocomplete="email">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>

                      <input type="hidden" value="seller" name="role">


                      <div class="row form-group">

                        <div class="col-md-12">
                          <label class="text-black" for="email" style="    font-size: 14px;">Phone Number</label>
                          <input id="Phone" type="text" class="form-control" name="Phone" value="{{ $users->phone }}">


                        </div>
                      </div>



                      <div class="row form-group">

                        <div class="col-md-12">
                          <label class="text-black" for="email" style="    font-size: 14px;">Store Name</label>
                          <input id="store_name" type="text" class="form-control" name="store_name" value="{{ $users->store_name }}">

                        </div>
                      </div>


                      <div class="row form-group">

                        <div class="col-md-12">
                          <label class="text-black" for="email" style="    font-size: 14px;">Address</label>
                          <input id="address" type="text" class="form-control" name="address" value="{{ $users->address }}">

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

