@extends ('admin/master')

@section('product')

<div class="content pb-0">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Edit Product</strong><small> Form</small></div>
                    <div class="card-body card-block">

                        <form action="{{url('updateproduct')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$data->id}}">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Title</label>
                                <input type="text" name="title" id="company" placeholder="Title" class="form-control"
                                    value="{{$data->prod_title}}">
                            </div>
                            <div class="form-group">
                                <label for="vat" class=" form-control-label">Description</label>
                                <input type="text" name="description" id="vat" placeholder="Desc" class="form-control"
                                    value="{{$data->prod_description}}">
                            </div>
                            <div class="form-group">
                                <label for="street" class=" form-control-label">Price</label>
                                <input type="text" name="price" id="street" placeholder="Price" class="form-control"
                                    value="{{$data->price}}">
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
                                <input type="text" name="discount_price" id="country" placeholder="discount price"
                                    class="form-control" value="{{$data->discount_price}}">
                            </div>
                            <div class="form-group">
                                <label for="country" class=" form-control-label">Thumbnail</label>
                                <input type="text" name="thumbnail" id="country" placeholder="Thumbnail"
                                    class="form-control" value="{{$data->thumbnail}}">
                            </div>
                            <div class="form-group">
                                <label for="country" class=" form-control-label">Option</label>
                                <input type="text" name="option" id="country" placeholder="Option"
                                    class="form-control" value="{{$data->option}}">
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