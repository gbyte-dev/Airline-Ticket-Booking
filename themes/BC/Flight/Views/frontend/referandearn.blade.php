@extends('layouts.app')
@section('content')

<div class="row">
		<div class="col-md-12  col-lg-6 ">
			@include('Flight::frontend.blocks.referform.referformtext')
	   </div>
	 	<div class="col-md-12  col-lg-6 ">
		   @include('Flight::frontend.blocks.referform.referform')
	   </div>
</div>

@endsection