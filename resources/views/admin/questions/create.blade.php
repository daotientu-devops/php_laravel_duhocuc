@extends('layouts.admin.default')
@section('content')
    <div id="faqs_create">
        <div class="page-title">
            <div class="title_left">
                <h3><a href='{{ url("$page__route") }}' title="{{ $page__list__title }}">&larr; {{ $page__list__title }}</a></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            @include('components.alert')
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{ $page__title }}</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form class="form-horizontal form-label-left input_mask" action="{{ url('cms/frequently-questions/store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung câu hỏi <span
                                            class="required">*</span></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea type="text" class="form-control" name="question" rows="3" required="required"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Danh mục</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="0">Không</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div id="lst_diseases"></div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên người hỏi <span
                                            class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control" name="author_name" required="required">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh câu hỏi (không bắt buộc)</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="file" class="form-control" name="thumbnail_url">
                                    <div id="thumbnail_preview" class="mt-4"></div>
                                </div>
                            </div>
                            <!---------------------begin: add tag ---------->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thêm tags</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input class="form-control" width="100%;" type="text" name="tags" id="tags"/>
                                </div>
                            </div>
                            <!---------------------end: add tag ---------->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng thái đăng</label>
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="pending" name="status"> Chờ đăng
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" checked="checked" value="publish" name="status"> Cho phép đăng
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row calendar-exibit">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thời gian đăng</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class='input-group date myDatepicker'>
                                        <input type='text' class="form-control" name="published_at" data-date-format="{{ config()->get('constants.DATA_DATE_FORMAT') }}"/>
                                        <span class="input-group-addon">
                                           <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Lưu</button>
                                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.tags')
    @include('components.thumbnail_preview')
@endsection
