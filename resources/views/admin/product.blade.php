@extends ('admin/master')


@section('dashboard')


<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body adan">
                        <h4 class="box-title">Products</h4>
                        <a href="{{url('addproduct')}}"><button type="submit" class="btn">Add Product</button></a>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">S.No.</th>
                                        <th class="avatar">Product</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>User</th>
                                        <th>Price</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $cate)
                                    <tr>
                                        <td class="serial">{{$cate->id}}</td>

                                        <td class="avatar">
                                            <img src="{{asset('/storage/app/public/' .$cate->thumbnail)}}" alt="Image Not Found" with="80"
                                                height="50" />
                                        </td>
                                        <td>{{$cate->prod_title}}</td>
                                        <td><span>{{$cate->category->cate_title}}</span> </td>
                                        <td><span>{{$cate->user->email}}</span> </td>
                                        <td><span>{{$cate->price}}</span></td>
                                        <td><span><a href="editproduct/{{$cate->id}}">Edit</a></span></td>
                                        <td><span><a href="proddelete/{{$cate->id}}">Delete</a></span></td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{$data->links()}}
        </div>
    </div>
</div>

<script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="assets/js/popper.min.js" type="text/javascript"></script>
<script src="assets/js/plugins.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
@endsection