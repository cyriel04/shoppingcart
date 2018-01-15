@extends('layouts.admin')

@section('title')
    Insert
@endsection

@section('content')

	<div class="row">
		<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
			<h1>File Upload</h1>
			<form action="" method="post" enctype="multipart/form-data">
				<label>Select image to upload:</label>
				<input type="file" name="file" id="file">

				<input type="submit" name="submit" value="Upload">
				<input type="hidden" value="{{ csrf_token() }}" name="_token">
			</form>
		</div>
	</div>
@endsection

@section('js')
<style type="text/css">

.row{width:960px;margin:0 auto;text-align:center; max-width:100%;}


    </style>

@endsection