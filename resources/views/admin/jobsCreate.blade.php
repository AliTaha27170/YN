@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <form action="/manage/jobs" method="POST">
                @csrf
                <div class="card-header">إضافة وظيفة شاغرة</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">العنوان</label>
                        <input name="title" class="form-control" id="title" type="text"
                            placeholder="عنوان الوظيفة الشاغرة">
                    </div>

                    <div class="form-group">
                        <label for="location">مكان الوظيفة</label>
                        <input name="location" class="form-control" id="location" type="text"
                            value="سوريا, اللاذقية, شارع هنانو">
                    </div>

                    <div class="form-group">
                        <label for="description">التفاصيل</label>
                        <textarea name="description" class="form-control" id="description" type="text"
                            placeholder="تفاصيل الوظيفة الشاغرة"></textarea>
                    </div>

                    

                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-success" type="submit">&nbsp;&nbsp;نشر&nbsp;&nbsp;</button>
                </div>
            </form>
        </div>

    </div>
    <div class="col-md-2"></div>
</div>

<script>
    $(document).ready(function(){
        $("textarea[name=description]").trumbowyg({
            lang:"ar"
        });

    })
</script>
@endsection
