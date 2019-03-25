<!DOCTYPE html>
<html lang="en">
@section('headerC')
	@include('partials.layouts.headerC')
@show
<body class="animsition">
	@section('MenuC')
		@include('partials.layouts.MenuC')
	@show


@yield('containerC')

@section('footerC')
	@include('partials.layouts.footerC')
@show



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	@section('scriptsC')
		@include('partials.layouts.scriptsC')
	@show

</body>
</html>
