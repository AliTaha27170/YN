@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><i class="fa fa-align-justify"></i>رسائل التواصل</div>
            <div class="card-body">
                @if (count($msgs) > 0)
                @foreach ($msgs as $msg)

                <div class="resume-item">
                    <table>
                        <tr>
                            <td>التاريخ</td>
                            <td>{{$msg->created_at}}</td>
                        </tr>

                        <tr>
                            <td>الاسم</td>
                            <td>{{$msg->name}}</td>
                        </tr>

                        <tr>
                            <td>البريد الالكتروني</td>
                            <td>{{$msg->email}}</td>
                        </tr>

                        <tr>
                            <td>العنوان</td>
                            <td>{{$msg->subject}}</td>
                        </tr>

                        <tr>
                            <td>الرسالة</td>
                            <td>{{$msg->message}}</td>
                        </tr>

                    </table>
                </div>
                @endforeach
                @else
                <div style="text-align: center">
                    <img height="80" src="/admin/assets/img/box.svg" alt="">
                    <h3 style="margin-top:0">لا يوجد</h3>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>


@endsection
