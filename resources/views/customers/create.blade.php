@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Customers</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="/addcustomer" id="customer" name="customer">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id">Name:</label>
                            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                        </div>

                        <div class="form-group">
                            <label for="id">Email:</label>
                            <input type="email" class="form-control" id="customer_email" name="customer_email" required>
                        </div>

                        <div class="form-group">
                            <label for="id">Phone:</label>
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <button style="cursor:pointer" type="submit_customer" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>

@endsection