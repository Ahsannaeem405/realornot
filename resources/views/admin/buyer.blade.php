@extends('admin.layouts.main')
@section('content')
    <?php
    use App\Models\User;
    $user = User::where('role', 'buyer')->get();
    // echo $user;
    ?>
     <section id="column-selectors">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">

                            <div class="table-responsive">
                                <table class="table table-striped dataex-html5-selectors">
                                    <thead>
                                        <tr>

                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_4"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Id: activate to sort column descending"
                                                    style="width: 193.887px;">Id</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_4"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 193.887px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_4"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Email: activate to sort column ascending"
                                                    style="width: 292.375px;">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_4"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Phone: activate to sort column ascending"
                                                    style="width: 140.788px;">Phone</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_4"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Type: activate to sort column ascending"
                                                    style="width: 56.4125px;">Type</th>
                                                {{-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_4" rowspan="1" colspan="1" aria-label="Store Name: activate to sort column ascending" style="width: 112.012px;">Store Name</th> --}}
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_4"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Store Name: activate to sort column ascending"
                                                    style="width: 112.012px;">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        ?>
                                        @foreach ($user as $users)

                                            <tr role="row" class="odd">


                                                <td class="sorting_1"><?php echo $i++; ?></td>

                                                <td class="sorting_1">{{ $users->name }}</td>
                                                <td>{{ $users->email }}</td>
                                                <td>{{ $users->phone }}</td>
                                                <td>{{ $users->role }}</td>
                                                {{-- <td>{{$users->store_name}}</td> --}}
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <div class="dropdown-menu" x-placement="bottom-start"
                                                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 32px, 0px);">

                                                            <a class="btn "
                                                                href="{{ url('edit_buyer', $users->id) }}">Edit</a>
                                                            <a class="btn"
                                                                href="{{ url('delete', $users->id) }}">Delete</a>


                                                        </div>
                                                    </div>


                                                </td>


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
