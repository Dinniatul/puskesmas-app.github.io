@extends('layouts.main')
@section('container')
<div class="col-md-6 col-lg-4">

	<div class="login-wrap py-5">
		<div class="img d-flex align-items-center justify-content-center" style="background-image: url(img/1.png);"></div>
		<h3 class="text-center mb-0">Welcome</h3>
		<p class="text-center">Administrator Puskesmas Padang Pasir</p>
		@if (session()->has('errorLogin'))
		<div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
			{{ session('errorLogin') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		@endif
		<form action="/login" class="login-form" method="post">
			@csrf
			<div class="form-group">
				<div class="icon d-flex align-items-center justify-content-center "><span class="fa fa-user"></span></div>
				<input type="text" class="form-control text-dark " name="email" placeholder="Email" required>
			</div>
			<div class="form-group">
				<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
				<input type="password" class="form-control text-dark" placeholder="Password" name="password" required>
			</div>
			<div class="form-group d-md-flex">
			</div>
			<div class="form-group">
				<button type="submit" class="btn form-control btn-primary rounded submit px-3">Login</button>

			</div>
			<a href="/pasienFE/create" class="btn form-control  btn-success px-5">Daftar Pasien</a>
		</form>
	</div>
</div>
@endsection