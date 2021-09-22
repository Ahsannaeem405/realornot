
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
          <table class="table bg-light text-dark dataex-html5-selectors">
                                    <thead style="color:white; font-size:3rem">
                                        <tr role="row" class="bg-primary text-white">
                                            <th class="sorting_asc " tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Id: activate to sort column descending" style="width: 193.887px;">Date</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 193.887px;">Payment Method</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 292.375px;">Amount</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 140.788px;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        ?>
                                        @foreach ($withdraws as $withdraw)

                                            <tr role="row" class="odd">


                                               <td>{{$withdraw->created_at}}</td>
                                                <td>{{$withdraw->method}}</td>
                                                <td>{{$withdraw->Amount}}</td>
                                                <td>{{$withdraw->Status}}</td>
                                                


                                            </tr>
                                        @endforeach
                                    </tbody>






                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  @endsection
<!-- @section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
} );
</script>

@endsection                 -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 