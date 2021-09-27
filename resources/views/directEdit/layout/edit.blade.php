<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Update Service </title>
		<link rel="stylesheet" href="{{  asset('css/edit.css') }}">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row mt-5">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-header text-center bg-primary text-white text-uppercase">
						تعديل خدمة 
						</div>
						<div class="card-body">
							<form action="{{ route('updateService',['id'=>$id]) }}" method="POST" >
                                @csrf
								<div class="form-group">
									<center>العنوان</center><br>
                                    <input type="text" name="title_en" placeholder="Title"class="form-control "  value="{{ $services->find($id)-> title_en }}" required>
                                    <br>
									<input type="text" name="title_ar" placeholder= "العنوان باللغة العربية"class="form-control ar"   value="{{ $services->find($id)-> title_ar }}" required>
                                </div>
                                <br><br>
								<div class="form-group">
									<center>النص</center><br>
                                    <textarea name="description_ar" placeholder="النص باللغة العربية   "class="form-control ar"  >{{ $services->find($id)-> description_ar }}</textarea>
                                    <br>
									<textarea name="description_en" placeholder="  Description "class="form-control " >{{ $services->find($id)-> description_en }}</textarea>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="حفظ التعديلات ">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></body>
</html>

