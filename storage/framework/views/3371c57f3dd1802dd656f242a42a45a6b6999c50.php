<ul class="nav navbar-nav">
	<li><a href="/">Blog Home</a></li>
	<?php if(Auth::check()): ?>
		<li <?php if(Request::is('admin/post*')): ?> class="active" <?php endif; ?>>
			<a href="/admin/post">Posts</a>
		</li>
		<li <?php if(Request::is('admin/tag*')): ?> class="active" <?php endif; ?>>
			<a href="/admin/tag">Tags</a>
		</li>
		<li <?php if(Request::is('admin/upload*')): ?> class="active" <?php endif; ?>>
			<a href="/admin/upload">Uploads</a>
		</li>
	<?php endif; ?>
</ul>

<ul class="nav navbar-nav navbar-right">
	<?php if(Auth::guest()): ?>
		<li><a href="/auth/login">Login</a></li>
	<?php else: ?>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
					aria-expanded="false">
				<?php echo e(Auth::user()->name); ?>

				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="/logout">Logout</a></li>
			</ul>
		</li>
	<?php endif; ?>
</ul>