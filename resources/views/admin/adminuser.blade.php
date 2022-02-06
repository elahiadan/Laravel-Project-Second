@extends ('admin/master')


@section('admin')


<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Users List</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">ID</th>
                                        <th>Email</th>
                                        <th>Total Product</th>
                                        <th>Total Category</th>
                                        <th>Role</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                @foreach ($data as $cate)
                                <tbody>
                                    <tr>
                                        <td class="serial">{{$cate->id}}</td>
                                        <td> <span class="name">{{$cate->email}}</span> </td>
                                        <td>{{$cate->tot_product}}</td>
                                        <td>{{$cate->tot_category}}</td>
                                        <td> <span class="product">{{$cate->role->name}}</span> </td>
                                        <td><span class="count"><a href="useredit/{{$cate->id}}">Edit</a></span></td>
                                        <td><span class="count"><a href="userdelete/{{$cate->id}}">Delete</a></span></td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="assets/js/popper.min.js" type="text/javascript"></script>
<script src="assets/js/plugins.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
@endsection