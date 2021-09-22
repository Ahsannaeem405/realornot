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
                                                    aria-label="Type: activate to sort column ascending"
                                                    style="width: 56.4125px;">Type</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_4"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Store Name: activate to sort column ascending"
                                                    style="width: 112.012px;">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;

                                        $paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
                                        $paypal_email = 'info@phpzag.com';

                                        ?>
                                        @foreach ($widt as $users)

                                            <tr role="row" class="odd">


                                                <td class="sorting_1"><?php echo $i++; ?></td>

                                                <td>{{$users->name->email}}</td>
                                                <td class="sorting_1">${{ $users->Amount }}</td>
                                                <td>{{ $users->method }}</td>
                                                <td>

                                                @if($users->method=='Paypal')  
                                                    @if($users->name->paypal_email !=null)  
                                                        <form action="<?php echo $paypal_url; ?>" method="post">            
                                                            <!-- Paypal business test account email id so that you can collect the payments. -->
                                                            <input type="hidden" name="business" value="{{$users->name->paypal_email}}">          
                                                            <!-- Buy Now button. -->
                                                            <input type="hidden" name="cmd" value="_xclick">            
                                                            <!-- Details about the item that buyers will purchase. -->
                                                            <input type="hidden" name="amount" value="{{ $users->Amount}}">
                                                            <input type="hidden" name="currency_code" value="USD">          
                                                            <!-- URLs -->
                                                            <input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/cancel.php'>
                                                            <input type='hidden' name='return' value='http://127.0.0.1:8000/admin/success/{{$users->id}}'>                     
                                                            <!-- payment button. -->
                                                            <button type="submit" class="btn btn-info">Approve</button>
                                                           
                                                        </form>
                                                    @else
                                                    User Paypal Cridential Not Given 
                                                    @endif 
                                                @else
                                                    @if($users->name->stripe_publiic_key !=null and $users->name->stripe_secret_key !=null)  

                                                    <a href="{{url('admin/stripe/' .$users->id)}}">
                                                    <button type="submit" class="btn btn-info">Approve</button></a>
                                                    @else
                                                    User Stripe Cridential Not Given 
                                                    @endif


                                                @endif


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
