@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>CUSTOMERS</h6>
            </div>
            <div class="col-md-12">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Customer') ? 'active':'' }}" href="javascript:void(0)"
              data-toggle="modal" id="newCustomer" data-target="#customerModal">
                <div class="form-group">
                  <button style="float: right" type="submit" 
                    class="btn btn-primary" id="addCustomer">+ Add New Customer
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
                <table id="showCustomer" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dee</td>
                            <td>dee@mail.com</td>
                            <td>075432123</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
            </div>

    <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="customerModalLabel">Add Customer</h5>
                        </div>
                      <div class="modal-body">
                        <form  id="customer" name="customer">
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
    <!-- End Modal -->

            </div>
          </div>
        </div>
      </div>

@endsection