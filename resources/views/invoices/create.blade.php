@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Payments</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="row">
                <div class="col-12">
                    <form  id="invoice" name="invoice">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id">Order ID:</label>
                            <input type="number" class="form-control" id="order_id" name="order_id" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Customer Name:</label>
                            <input type="text" class="form-control" id="cust_name" name="cust_name" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Order Name:</label>
                            <input type="text" class="form-control" id="ord_name" name="ord_name" required>
                        </div>

                        <div class="form-group">
                            <label for="id">Total Amount Due:</label>
                            <input type="number" class="form-control" id="total_due" name="total_due">
                        </div>

                        <div class="form-group">
                            <label for="amount">Total Amount Paid:</label>
                            <input type="number" class="form-control" id="total_paid" name="total_paid" required>
                        </div>

                        <div class="form-group">
                            <button style="cursor:pointer" id="submit_inv" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>

@endsection