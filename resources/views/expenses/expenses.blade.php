@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>EXPENSES</h6>
            </div>
            <div class="col-md-12">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Add expense') ? 'active':'' }}" href="javascript:void(0)"
              data-toggle="modal" id="newExpense" data-target="#expenseModal">
                <div class="form-group">
                  <button style="float: right" type="submit" 
                    class="btn btn-primary" id="addExpense">+ Add New Expense
                  </button>
                </div>
                </br>
              </a>
            </div>
            <div class="col-md-12">
                <hr/>
            </div>
            
            <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                <table id="showExpense" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Expense</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count=1 ?>
                      @foreach($expenses as $row)
                        <tr>
                            <td>{{$count++}}</td>    
                            <td>{{$row['expense']}}</td>
                            <td>{{$row['type']}}</td>
                            <td>{{$row['amount']}}</td>
                            <td>{{$row['created_at']}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
                </div>
                </div>
            </div>

    <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="expenseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="expenseModalLabel">Add Payment</h5>
                        </div>
                      <div class="modal-body">
                          <form id="expenseForm" name="expense">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="name">Expense:</label>
                                <input type="text" class="form-control" id="expense" name="expense">
                            </div>    

                            <div class="form-group">
                                <label for="id">Type:</label>
                                <input type="text" class="form-control" id="type" name="type">
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount:</label>
                                <input type="number" class="form-control" id="amount" name="amount" required>
                            </div>

                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" id="submit_expense" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- End Modal -->

            </div>
          </div>
        </div>
      </div>

@endsection