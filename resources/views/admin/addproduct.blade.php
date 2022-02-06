@extends ('admin/master')

@section('product')

<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Add Product</strong><small> Form</small></div>
                    <div class="card-body card-block">

                        <form action="formsubmit" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Title</label>
                                <input type="text" name="title" id="company" placeholder="Title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Description</label>
                                <input type="text" name="description" id="vat" placeholder="Desc" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Category</label>
                                <select class="custom-select" name="selectbox">
                                    <option selected>Select Category</option>
                                    <!-- option -->
                                    @foreach($data as $cate)
                                    <option value="{{$cate->id}}">{{$cate->cate_title}}</option>
                                    @endforeach

                                    <!-- option -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="street" class=" form-control-label">Price</label>
                                <input type="text" name="price" id="street" placeholder="Price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=" vat" class=" form-control-label">Discount</label>
                                <select class="custom-select" name="discount">
                                    <option selected>Choose</option>
                                    <option value="1">YES</option>
                                    <option value="0">NO</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="country" class=" form-control-label">Discount Price</label>
                                <input type="text" name="discount_price" id="country" placeholder="Price after discount"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="country" class=" form-control-label">Select Picture</label>
                                <input type="file" name="thumbnail" id="country" placeholder="thumbnail"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="country" class=" form-control-label">Option</label>
                                <input type="text" name="option" id="country" placeholder="Optinal parameter"
                                    class="form-control">
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