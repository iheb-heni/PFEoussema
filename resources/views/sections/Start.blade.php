<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<span class="h6 d-inline-block mb-4 subhead text-uppercase">Gym fitness club</span>
				<h1 class="text-uppercase text-white mb-5">Step up your <span class="text-color">fitness Challange</span><br>with us</h1>
                <a href="{{ auth()->check() ? route(auth()->user()->role . '.dashboard') : route('login') }}" class="btn btn-main">
                    {{ auth()->check() ? 'Home' : 'Join Us' }} <i class="ti-angle-right ml-3"></i>
                </a>

            </div>
		</div>
	</div>
</section>
