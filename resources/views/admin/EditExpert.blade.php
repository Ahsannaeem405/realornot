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
                        <h1 style="margin-block: 18px">Edit Expert</h1><br>


                      </div>



                      <input type="hidden" value="expert" name="role">
                      <input type="hidden" name="idd"value="{{$users->id}}" >



                      <div class="row form-group">

                        <div class="col-md-12">
                          <label class="text-black" style="font-size: 14px" for="email">Name</label>
                          <input id="Name" type="text" class="form-control "  name="name" value="{{ $users->name}}" required>

                        </div>
                      </div>

                      <div class="row form-group">

                        <div class="col-md-12">
                          <label class="text-black" style="font-size: 14px" for="subject">Email</label>
                          <input id="Email" type="Email" class="form-control" value="{{ $users->email}}" name="email" >

                        </div>
                      </div>


                      <div class="row form-group">

                        <div class="col-md-12">
                          <label class="text-black" style="font-size: 14px"for="subject">Resume Upload</label>
                          <input id="Resume" type="file" class="form-control" {{ $users->resume}} name="Resume" required >

                        </div>
                      </div>



                      <div class="row form-group">

                        <div class="col-md-12">
                          <label class="text-black" style="font-size: 14px" for="subject">Best Time For Interview</label>

                          <input id="Interview_time" type="date" class="form-control" value="@if($users->Interview_time!=null){{date('Y-m-d',strtotime($users->Interview_time))}}@else{{date('mm-dd-yyyy')}}@endif" name="Interview_time" required >

                        </div>
                      </div>

                      <div class="row form-group">

                        <div class="col-md-12">
                          <label class="text-black" style="font-size: 14px" for="subject">Brand Expert In</label>
                          <input id="brand_expert" type="text" class="form-control" value="{{ $users->brand_expert}}" name="brand_expert" required >

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

