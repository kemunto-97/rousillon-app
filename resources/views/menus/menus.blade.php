@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>MENU</h6>
            </div>
            <div class="col-md-12">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Menu') ? 'active':'' }}" href="javascript:void(0)"
              data-toggle="modal" id="newMenu" data-target="#menuModal">
                <div class="form-group">
                  <button style="float: right" type="submit" 
                    class="btn btn-primary" id="addMenu">+ Add New Menu
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
                <table id="showMenu" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Age Category</th>
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
                <div wire:ignore.self class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="menuModalLabel">Add Menu</h5>
                        </div>
                      <div class="modal-body">
                          <form id="menu" name="menu">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="id">Product Name:</label>
                                <input type="text" class="form-control" id="prod_name" name="prod_name">
                            </div>

                            <div class="form-group">
                                <label for="id">Description:</label>
                                <input type="text" class="form-control" id="prod_descrip" name="prod_descrip">
                            </div>

                            <div class="form-group">
                                <label for="amount">Price:</label>
                                <input type="number" class="form-control" id="prod_price" name="prod_price" required>
                            </div>

                            <div class="form-group">
                                <label for="id">Age Class:</label>
                                <input type="text" class="form-control" id="age_class" name="age_class">
                            </div>

                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" id="saveMenu" class="btn btn-primary">Submit</button>
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