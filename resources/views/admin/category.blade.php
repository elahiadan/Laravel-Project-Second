@extends ('admin/master')


@section('category')


<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body adan">
                        <h4 class="box-title">Categories</h4>
                        <a href="{{url('addcategory')}}"><button type="submit" class="btn">Add Category</button></a>
                        
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                        <!-- <h4 class="box-title">Categories</h4> -->
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">ID</th>
                                        <th> Category Name</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                @foreach ($data as $cate)
                                <tbody>
                                    <tr>
                                        <td class="serial">{{$cate->id}}</td>
                                        <td> <span class="name">{{$cate->cate_title}}</span> </td>
                                        <td> <span class="product">{{$cate->cate_description}}</span> </td>
                                        <td>{{$cate->count}}</td>
                                        <td><span class="count"><a href="editcategory/{{$cate->id}}">Edit</a></span></td>
                                        <td><span class="count"><a href="catedelete/{{$cate->id}}">Delete</a></span></td>
                                    </tr>
                                </tbody>
                                @endforeach
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