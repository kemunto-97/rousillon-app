@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>CATEGORIES</h6>
            </div>
            <div class="col-md-12">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Category') ? 'active':'' }}" href="javascript:void(0)" data-toggle="modal" id="newCategory" data-target="#categoriesModal">
                <div class="form-group">
                  <button style="float: right" type="submit" 
                    class="btn btn-primary" id="addPayment">Add New Category
                  </button>
                </div>
                </br>
              </a>
            </div>
            <br>
            <div class="col-md-12">
                <hr/>
            </div>
            
            <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                <table id="showCategory" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dessert</td>
                            <td>12/04/2022</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
            </div>

    <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="categoriesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="categoriesModalLabel">Add Category</h5>
                        </div>
                      <div class="modal-body">
                        <form id="categoryForm" name="category">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="id">Category Name:</label>
                                <input type="text" class="form-control" id="category_name" name="category_name" required>
                            </div>
                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" id="submit_category" class="btn btn-primary">Submit</button>
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