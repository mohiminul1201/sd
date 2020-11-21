@extends('website.layout.default')

@section('content')
<!-- Large input -->
<div class="container">
	 <center><h1>department</h1></center>
		<div class=" md-form form-lg">
  <input type="text" id="inputLGEx" class="form-control form-control-lg">
  <label for="inputLGEx">name</label>
</div>

<!-- Medium input -->
<div class="md-form">
  <input type="text" id="inputMDEx" class="form-control">
  <label for="inputMDEx">short_name</label>
</div>

<!-- Small input -->
<button class="btn btn-info btn-block my-4" type="submit">Sign in</button>
</div>

</div>

@stop