@extends ('admin/master')


@section('dashboard')


<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Dashboard</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Discount</th>
                                        <th>Final Price</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $cate)
                                    <tr>
                                        <td>{{$cate->id}}</td>
                                        <td> <span>{{$cate->prod_title}}</span> </td>
                                        <td> <span>{{$cate->prod_description}}</span> </td>
                                        <td> <span>{{$cate->category->cate_title}}</span> </td>

                                        @if($cate->discount == 1)

                                        <td><span>YES</span></td>
                                        @else
                                        <td><span>NO</span></td>
                                        @endif

                                        <td><span>{{$cate->discount_price}}</span></td>
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