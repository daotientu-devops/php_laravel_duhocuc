@extends('layouts.admin.default')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php $customers->setPath('/cms/subcribers'); ?>
                            {{ $customers->links() }}
                                <a href='{{ url("cms/subcribers/download") }}' class="btn btn-xs btn-primary">
                                    <i class="fa fa-download"></i> Download danh sách
                                </a>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Thời gian đăng ký</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->created_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $customers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection