@extends('admin.layouts.main')
@section('content')
    <?php
    use App\Models\User;
    use App\Models\Brand;
    use App\Models\Express;
    $user = Express::all();
    // echo $user;
    ?>
      <section id="column-selectors">


        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            {{-- <div style="    margin-bottom: 10px; text-align: end;">
                                <button style="" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Add Brand</button>
                            </div> --}}

                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}

                            </div>

                            @endif


                            <div class="table-responsive">
                                <table class="table table-striped dataex-html5-selectors">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Id: activate to sort column descending" style="width: 193.887px;">Id</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 193.887px;">Brand Name</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 193.887px;">Image</th>
                                            {{-- <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 193.887px;">Expert Comment</th> --}}
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 193.887px;">Type</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 193.887px;">Expert Status</th>

                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Store Name: activate to sort column ascending" style="width: 112.012px;">Action</th>
                                        </tr>
                                    </thead>

      <tbody>
        <?php
        $i = 1;
        ?>
        @foreach ($user as $users)

        @if($users->status_expert != null || $users->role == 'buyer')

            <tr role="row" class="odd">


                <td class="sorting_1"><?php echo $i++; ?></td>

                <td class="sorting_1">{{ $users->Brand->brand_name }}</td>


                <td class="sorting_1"> <img style=" width: 20%;" src="{{asset('/uploads/'.$users->photos) }}" alt="">  </td>
                <td class="sorting_1"> {{$users->role }}  </td>

                <td>

                    <button type="button" class="btn btn-primary">
                        @if($users->role == 'buyer')
                        {{'Buyer Authentication'}}
                        @elseif( $users->status_expert == null || $users->status_expert == 0)
                        {{'Turn down'}}

                        @elseif($users->admin_expert == 'No Pass')
                        {{-- @dd('oo') --}}
                        {{'Turn down'}}
                        @else

                        {{'Approved'}}

                        @endif
                    </button>
                </td>


                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle"
                            data-toggle="dropdown" aria-expanded="false">

                            @if($users->admin_expert == 'No Pass')
                            {{'Turn down'}}
                            @elseif( $users->status_expert == 2)
                            {{'Approved'}}

                            @elseif($users->status_expert == null)

                            {{'Turn down'}}

                            @else
                            Actions
                            @endif
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start"
                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 32px, 0px);">

                            <a class="btn"
                                href="{{ url('admin_Approve', $users->id) }}" >Approve</a>
                            <a class="btn"
                                href="{{ url('admin_Turn_down', $users->id) }}">Turn down</a>


                        </div>
                    </div>


                </td>

                {{-- <td>
                    <span style="height: 10px"> {{$users->comment}}</span>

                </td> --}}


            </tr>
            @endif


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
