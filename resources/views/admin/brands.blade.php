@extends('admin.layouts.main')
@section('content')
    <?php
    use App\Models\User;
    use App\Models\Brand;
    $user = Brand::all();
    // echo $user;
    ?>
      <section id="column-selectors">


        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div style="    margin-bottom: 10px; text-align: end;">
                                <button style="" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Add Brand</button>
                            </div>

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
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 193.887px;">Name</th>


                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Store Name: activate to sort column ascending" style="width: 112.012px;">Action</th>
                                        </tr>
                                    </thead>

      <tbody>
        <?php
        $i = 1;
        ?>
        @foreach ($user as $users)

            <tr role="row" class="odd">


                <td class="sorting_1"><?php echo $i++; ?></td>

                <td class="sorting_1">{{ $users->brand_name }}</td>




                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle"
                            data-toggle="dropdown" aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start"
                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 32px, 0px);">

                            <a class="btn"
                                href="{{ url('admin/edit_brand', $users->id) }}" data-toggle="modal" data-target="#editModal{{ $users->id }}">Edit</a>
                            <a class="btn"
                                href="{{ url('admin/delete_brand', $users->id) }}">Delete</a>


                        </div>
                    </div>


                </td>


            </tr>

            <div class="modal fade" id="editModal{{ $users->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <?php
                        $brand = Brand::Where('id', $users->id)->first();
                        ?>
                      <h5 class="modal-title" id="exampleModalLabel">Edit Brand</h5>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{url('admin/edit_brand',[$users->id])}}">
                    <div class="modal-body">

                          @csrf

                          <input type="text" name="brand_name" value="{{$brand->brand_name}}" class="form-control" id="add_brand">

                    </div>
                    <div class="modal-footer">
                      <button type="button"class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit"class="btn btn-primary">Submit</button>

                  </form>
                    </div>
                  </div>
                </div>
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


<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> --}}

<!-- Modal -->




  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{url('admin/add_brand')}}">
        <div class="modal-body">

              @csrf
              <input type="text" name="brand_name" value="" required class="form-control" id="add_brand">

        </div>
        <div class="modal-footer">
          <button type="button"class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit"class="btn btn-primary">Submit</button>

      </form>
        </div>
      </div>
    </div>
</div>
@endsection
