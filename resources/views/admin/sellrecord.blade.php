
@extends('admin.master')
@section('content')






<div class="row">




    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Pacage Table</h4>
            <p class="card-description">Pacage list</p>



            <table id="tableid" class="table">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Pack Name</th>
                     <th>Price</th>
                     <th>Customer Name</th>
<th>padid</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                    @php
                        $finalcost=0;
                        $i = 0;
                    @endphp

                    @foreach ($orderedpack as $item)
                @php
                    $i++;
                @endphp

                  <tr>
                      <td>{{ $i }}</td>
                    <td>{{ $item->pack_name }} </td>
                    <td>{{ ( $item->price)-(($item->new_discount* $item->price)/100) }} Taka</td>
                    <td>{{ $item->name }} </td>
                    <td>
                        <form action="{{ url('/up_paymentamount') }}" method="POST">
                            
                            @csrf
                            <input type="text" name="payment_amount" value="{{ $item->payment_amount }}" id="">
                            <select name="reffer" id="">
                                <option>--Choose--</option>

                                @foreach ($reffers as $rf)
                                <option @php
                                    if($rf->reffer_name== $item->reffer){echo "selected";}
                                @endphp value="{{ $rf->reffer_name }}">{{ $rf->reffer_name }}</option>
                                @endforeach

                            </select>
                         <input type="hidden" value="{{ $item->sleep_no }}" name="sleep_no" >


                         <button onclick='return myFunction("Check your account again and click confirm")' name="uppayment" style="padding: 5px; border:1px solid #81c046; margin-bottom:3px;" class="badge badge-primary">OK</button>
                     </form>
                    </td>

                    <td>



                    <a style="padding: 5px;" href="{{  url('/pending/record/'.$item->sleep_no) }}" class="badge badge-success">Confirm</a>
                    </td>
                  </tr>


                    @endforeach

</p>
                </tbody>
              </table>

          </div>
        </div>
      </div>

</div>


@stop
