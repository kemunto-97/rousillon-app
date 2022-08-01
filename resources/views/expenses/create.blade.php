@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Expenses</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="/addexpense" id="payment" name="payment">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id">Invoice Number:</label>
                            <input type="number" class="form-control" id="invoice_no" name="invoice_no" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Mode of Payment:</label>
                            <select name="method" class="form-control" id="method" required>
                                @foreach($modes as $row)
                                    <option value="{{$row['mode']}}">{{$row['mode']}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id">Transaction ID:</label>
                            <input type="number" class="form-control" id="transaction_id" name="transaction_id">
                        </div>

                        <div class="form-group">
                            <label for="amount">Total Amount:</label>
                            <input type="number" class="form-control" id="amount" name="amount" required>
                        </div>

                        <div class="form-group">
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>

@endsection