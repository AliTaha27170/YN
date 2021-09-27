@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><i class="fa fa-align-justify"></i>الوظائف الشاغرة</div>
            <div class="card-body">
                @if (count($jobs) > 0)
                <table class="table table-responsive-sm table-bordered table-striped table-sm m-data-table">
                    <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>المكان</th>
                            <th>تاريخ الإضافة</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($jobs as $job)
                        <tr>
                            <td>{{$job->title}}</td>
                            <td>{{$job->location}}</td>
                            <td>{{$job->created_at}}</td>
                            <td class="btns-control">
                                <a href="/manage/jobs/{{$job->id}}/edit" class="edit-btn"><img
                                        src="/admin/assets/img/edit.svg" alt=""></a>
                                <a onclick="deleteJob({{$job->id}})" class="delete-btn"><img
                                        src="/admin/assets/img/delete.svg" alt=""></a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
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
