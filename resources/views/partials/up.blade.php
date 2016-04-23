<div style="background: #7f8c8d; padding: 10px;">
	<div class="container">
		<div class="pull-right">
			@if (Auth::guest())
			<a href="{{ url('/register') }}"><span style="color: white;">Registruokis!</span></a>
			&nbsp&nbsp&nbsp&nbsp
			<a href="{{ url('/login') }}"><span style="color: white;">Prisijungti</span></a>
			&nbsp&nbsp&nbsp&nbsp
			<span style="color: white;">Skambinti: +370-676-76790</span>
			@else
			<a href="#"><span style="color: white;">{{ Auth::user()->name }}</span></a>
			&nbsp&nbsp&nbsp&nbsp
			<a href="{{ url('/logout') }}"><span style="color: white;">Atsijungti</span></a>
			
            @endif
		</div>
	</div>
</div>
