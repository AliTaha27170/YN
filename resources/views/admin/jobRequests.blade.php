@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><i class="fa fa-align-justify"></i>طلبات التوظيف</div>
            <div class="card-body">
                @if (count($resumes) > 0)
                @foreach ($resumes as $resu)

                <div class="resume-item">
                    <table>
                        <tr>
                            <td>التاريخ</td>
                            <td>{{$resu->created_at}}</td>
                        </tr>

                        <tr>
                            <td>الاسم</td>
                            <td>{{$resu->name}}</td>
                        </tr>

                        <tr>
                            <td>البريد الالكتروني</td>
                            <td>{{$resu->email}}</td>
                        </tr>

                        <tr>
                            <td>رقم الهاتف</td>
                            <td>{{$resu->phone}}</td>
                        </tr>

                        <tr>
                            <td>الوظيفة المرغوبة</td>
                            <td>{{$resu->job}}</td>
                        </tr>

                        <tr>
                            <td>وصف قصير</td>
                            <td>{{$resu->about}}</td>
                        </tr>

                    </table>
                    <div class="btns">
                        <a href="/resumes/{{$resu->resume}}" class="btn btn-info">نحميل السيرة الذاتية</a>
                    </div>
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

<div>
    <form id="delete-form" action="" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
    </form>
</div>

<script>
    function deleteJob(id) {
        if (confirm('هل انت متأكد من الحذف')) {
            $("#delete-form").attr("action", "/manage/jobs/" + id);
            $("#delete-form").submit();
        }
    }

</script>

@endsection
