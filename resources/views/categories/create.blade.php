@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Categories</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="/addcategory" id="category" name="category">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id">Category Name:</label>
                            <input type="text" class="form-control" id="category_name" name="category_name" required>
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