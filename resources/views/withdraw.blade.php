
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

    
    <div class="site-section"  data-aos="fade">
      
      <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <a href="{{url('expert_withdraw_form')}}" value="" class="btn btn-primary float-right">
                    Add Amount</a>
                </div>
              </div>
        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="site-section-heading text-center">WithDraw Details</h2>
              </div>
              
            </div>
          </div>
          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Date</th>
                <th>Payment Method</th>
                <th>Amount</th>
                <th>Status</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach($withdraws as $withdraw)
            <tr>
                <td>{{$withdraw->created_at}}</td>
                <th>{{$withdraw->method}}</th>
                <td>{{$withdraw->Amount}}</td>
                <td>{{$withdraw->Status}}</td>
            </tr>
            @endforeach
        </tfoot>
    </table>

        </div>

    
      </div>
    </div>

    <div class="footer py-4">

    </div>





  </div>

  @endsection
@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
} );
</script>

@endsection                                                                                                                                                                                                                                                                                                                                                                                                                                                                         