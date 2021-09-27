@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <form action="/manage/jobs/{{$job->id}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="card-header">تعديل وظيفة شاغرة</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">العنوان</label>
                        <input name="title" class="form-control" id="title" type="text" value="{{$job->title}}"
                            placeholder="عنوان الوظيفة الشاغرة">
                    </div>

                    <div class="form-group">
                        <label for="location">مكان الوظيفة</label>
                        <input name="location" class="form-control" id="location" type="text"
                            value="{{$job->location}}">
                    </div>

                    <div class="form-group">
                        <label for="description">التفاصيل</label>
                        <textarea name="description" class="form-control" id="description" type="text"
                            placeholder="تفاصيل الوظيفة الشاغرة">{!!$job->description!!}</textarea>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-success" type="submit">&nbsp;&nbsp;تعديل&nbsp;&nbsp;</button>
                </div>
            </form>
        </div>

    </div>
    <div class="col-md-2"></div>
</div>

<script>
    $(document).ready(function () {
        $("textarea[name=description]").trumbowyg({
            lang:"ar"
        });

    })

</script>
@endsection
