@extends('backEnd.master')
@section('title')
@lang('hr.teachers_list')
@endsection
@section('mainContent')
<section class="sms-breadcrumb mb-40 white-box">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1>@lang('hr.teachers_list')</h1>
            <div class="bc-pages">
                <a href="{{route('dashboard')}}">@lang('common.dashboard')</a>
                <a href="#">@lang('hr.teachers')</a>
                <a href="#">@lang('hr.teachers_list')</a>
            </div>
        </div>
    </div>
</section>
<section class="admin-visitor-area up_admin_visitor">
    <div class="container-fluid p-0">
       
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4 no-gutters">
                        <div class="main-title">
                            <h3 class="mb-0">@lang('common.teacher')</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <table id="table_id" class="display school-table" cellspacing="0" width="100%">

                            <thead>
                                <tr> 
                                    <th>@lang('hr.teacher_name')</th>
                                    <th>@lang('common.email')</th>
                                    <th>@lang('common.phone')</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($teachers as $value)
                                <tr> 
                                    <td>
                                        <img src="{{ file_exists(@$value->teacher->staff_photo) ? asset(@$value->teacher->staff_photo) : asset('public/uploads/staff/demo/staff.jpg') }}" class="img img-thumbnail" style="width: 60px; height: auto;">
                                        {{@$value->teacher !=""?@$value->teacher->full_name:""}}
                                    </td> 
                                    <td>{{@$value->teacher !=""?@$value->teacher->email:""}}</td>
                                    <td>{{@$value->teacher !=""?@$value->teacher->mobile:""}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
