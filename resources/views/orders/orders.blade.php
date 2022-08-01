@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>ORDERS</h6>
            </div>
            <div class="col-md-12">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Order') ? 'active':'' }}" href="javascript:void(0)"
              data-toggle="modal" id="newOrder" data-target="#orderModal">
                <div class="form-group">
                  <button style="float: right" type="submit" 
                    class="btn btn-primary" id="addOrder">+ Add New Order
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
                <table id="showOrder" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
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
                <div wire:ignore.self class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="orderModalLabel">Add New Order</h5>
                        </div>
                      <div class="modal-body">
                          <form id="order" name="order">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="id">Product ID:</label>
                                <input type="number" class="form-control" id="prod_id" name="prod_id">
                            </div>

                            <div class="form-group">
                                <label for="id">Product Name:</label>
                                <input type="text" class="form-control" id="product_name" name="product_name">
                            </div>

                            <div class="form-group">
                                <label for="amount">Price:</label>
                                <input type="number" class="form-control" id="product_price" name="product_price" required>
                            </div>

                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" id="saveOrder" class="btn btn-primary">Submit</button>
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