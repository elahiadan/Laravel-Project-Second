@extends ('admin/master')

@section('product')

<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Add Category</strong><small> Form</small></div>
                    <div class="card-body card-block">

                        <form action="submit_category" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Category Name</label>
                                <input type="text" name="cate_title" id="company" placeholder="Title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Description</label>
                                <input type="text" name="cate_description" id="company" placeholder="Description" class="form-control">
                            </div>
                            
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Submit</span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection