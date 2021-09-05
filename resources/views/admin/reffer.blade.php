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
                    <th> Name</th>
                     <th>Phone</th>
                  

                  </tr>
                </thead>
                <tbody>
                    @php

                        $i = 0;
                    @endphp

                    @foreach ($reffers as $item)
                @php
                    $i++;
                @endphp

                  <tr>
                      <td>{{ $i }}</td>
                    <td>{{ $item->reffer_name }} </td>
                    <td>{{ $item->phone_no }} </td>

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




            <form method="POST" action="{{ url('/create_reffer') }}" class="forms-sample" enctype="multipart/form-data">
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
                    <label for="exampleInputEmail3">Reffer Name</label>
                    <input type="text" class="form-control" name="reffer_name" id="exampleInputEmail3" placeholder="Reffer Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Phone No</label>
                    <input type="text" class="form-control" name="phone_no" id="exampleInputEmail3" placeholder="Phone No">
                  </div>

                  <button type="submit" name="addreffer" class="btn btn-primary mr-2">Submit</button>
                </form>




          </div>
        </div>
      </div>
</div>


@stop
