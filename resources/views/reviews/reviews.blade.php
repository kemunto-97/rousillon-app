@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>REVIEWS</h6>
            </div>
            <div class="col-md-12">
            <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Review') ? 'active':'' }}" href="javascript:void(0)"
              data-toggle="modal" id="newReview" data-target="#reviewModal">
                <div class="form-group">
                  <button style="float: right" type="submit" 
                    class="btn btn-primary" id="addReview">+ Add Review
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
                <table id="showReviews" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Content</th>
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
                <div wire:ignore.self class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reviewModalLabel">Add Review</h5>
                        </div>
                      <div class="modal-body">
                          <form id="review" name="review">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="id">Customer:</label>
                                <input type="text" class="form-control" id="cust_name" name="cust_name">
                            </div>

                            <div class="form-group">
                                <label for="amount">Review:</label>
                                <input type="number" class="form-control" id="cust_review" name="cust_review" required>
                            </div>

                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" id="saveReview" class="btn btn-primary">Submit</button>
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