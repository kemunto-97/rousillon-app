@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Invoices</h6>
            </div>
            <div class="col-md-12">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Invoice') ? 'active':'' }}" href="javascript:void(0)"
              data-toggle="modal" id="newInvoice" data-target="#invoiceModal">>
                <div class="form-group">
                  <button style="float: right" type="submit" 
                    class="btn btn-primary" id="addInvoice">+ Add New Invoice
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
                <table id="showInvoice" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Order</th>
                            <th>Amount Due</th>
                            <th>Amount Paid</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                </div>
                </div>
            </div>

    <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="invoiceModalLabel">Add Invoice</h5>
                        </div>
                      <div class="modal-body">
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
                                <button style="cursor:pointer" id="saveInv" type="submit" class="btn btn-primary">Submit</button>
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