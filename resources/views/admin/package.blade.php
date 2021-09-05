@extends('admin.master')
@section('content')






<div class="row">




    <div class="col-md-8 grid-margin stretch-card">
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
                     <th>New Discount</th>
                     <th>Re-New Discount</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp

                    @foreach ($allpack as $item)
                @php
                    $i++;
                @endphp

                  <tr>
                      <td>{{ $i }}</td>
                    <td>{{ $item->pack_name }} </td>
                    <td>{{ $item->price }} Taka</td>
                    <td>{{ ( $item->price)-(($item->new_discount* $item->price)/100) }} Taka</td>
                    <td>{{ ($item->price)-(($item->renew_discount* $item->price)/100) }} Taka</td>
                    <td>
                       <form action="{{ url('/del_pack') }}" method="POST">
                           @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id" >

                        <button onclick='return myFunction("Check your account again and click confirm")' name="removepack" style="padding: 5px; border:1px solid red; margin-bottom:3px;" class="badge badge-danger">Delete</button>
                    </form>


                    <a style="padding: 5px;" href="{{  url('package/'.$item->pack_name) }}" class="badge badge-success">update</a>
                    </td>
                  </tr>


                    @endforeach

</p>
                </tbody>
              </table>

          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daily Cost  Form</h4>
            <p class="card-description">Create Todays Cost </p>

            <?php if (!empty($packbyname->pack_name)) { ?>

                <form method="POST" action="{{ url('/update_pack') }}" class="forms-sample" enctype="multipart/form-data">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail3">Pacage Name</label>
                        <input type="text" class="form-control" name="pack_name" id="exampleInputEmail3" value="{{ $packbyname->pack_name }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Price</label>
                        <input type="text" class="form-control" name="price" id="exampleInputEmail3" value="{{ $packbyname->price }}">
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleTextarea1">New Discount</label>
                                <input type="text" class="form-control" name="new_discount" id="exampleInputEmail3" value="{{ $packbyname->new_discount }}">
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleTextarea1">Re-New Discount</label>
                                 <input type="text" class="form-control" name="renew_discount" id="exampleInputEmail3" value="{{ $packbyname->renew_discount }}">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Month</label>
                        <input type="text" class="form-control" name="month" id="exampleInputEmail3" value="{{ $packbyname->month }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Front View</label>
                        <select class="form-control" name="front_view" id="">
                          <option @php
                              if ($packbyname->front_view==0) {
                                 echo 'selected';
                              }
                          @endphp value="0">Yes</option>
                          <option @php
                          if ($packbyname->front_view==1) {
                             echo 'selected';
                          }
                      @endphp value="1">No</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Details</label>

                            <textarea name="details" class="form-control" id="exampleTextarea1" rows="4">{{ $packbyname->details }}</textarea>
                      </div>
                      <button type="submit" name="updatepack" class="btn btn-primary mr-2">Update</button>
                    </form>
                    <?php }else{ ?>

            <form method="POST" action="{{ url('/create_pack') }}" class="forms-sample" enctype="multipart/form-data">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail3">Pacage Name</label>
                    <input type="text" class="form-control" name="pack_name" id="exampleInputEmail3" placeholder="Pacage Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Price</label>
                    <input type="text" class="form-control" name="price" id="exampleInputEmail3" placeholder="Price">
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleTextarea1">New Discount</label>
                            <input type="text" class="form-control" name="new_discount" id="exampleInputEmail3" placeholder="New Discount">
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleTextarea1">Re-New Discount</label>
                             <input type="text" class="form-control" name="renew_discount" id="exampleInputEmail3" placeholder="Re-New Discount">
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Month</label>
                    <input type="text" class="form-control" name="month" id="exampleInputEmail3" placeholder="Month">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Front View</label>
                    <select class="form-control" name="front_view" id="">
                      <option value="0">Yes</option>
                      <option value="1">No</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Details</label>
                    <textarea name="details" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                  </div>
                  <button type="submit" name="createpack" class="btn btn-primary mr-2">Submit</button>
                </form>

<?php } ?>



          </div>
        </div>
      </div>
</div>


@stop
