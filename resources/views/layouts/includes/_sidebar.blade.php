<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						@if(auth()->user()->role == 'admin')
						<li><a href="/goal" class=""><i class="lnr lnr-code"></i> <span>Goal</span></a></li>
						<li><a href="/question" class=""><i class="lnr lnr-question-circle"></i> <span>Question</span></a></li>
						<li><a href="/tester" class=""><i class="lnr lnr-chart-bars"></i> <span>Tester</span></a></li>
						@endif

						@if(auth()->user()->role == 'tester')
						<li><a href="/testergoal" class=""><i class="lnr lnr-code"></i> <span>Goal</span></a></li>
						@endif
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Profile</span> </a>
						<!--	<div id="subPages" class="collapse ">
						<i class="icon-submenu lnr lnr-chevron-left"></i>
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div> -->
						</li>
						
					</ul>
				</nav>
			</div>
		</div>s