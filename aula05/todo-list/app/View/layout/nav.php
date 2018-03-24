<nav class="navbar navbar-default navbar-static-top">
<?php if (isset($_SESSION['logado'])) : ?>
	<div class="container">
			<div class="collapse navbar-collapse">
		  		<ul class="nav navbar-nav">
			  		<li><a href="">à Fazer</a></li>
			  		<li><a href="">Fazendo</a></li>
			   		<li><a href="">Feito</a></li> 	
			    </ul>
			    <ul class="nav navbar-nav pull-right">
			    	<li><a href="?r=login/logout">LOGOUT</a></li>
			    </ul>
		  </div>
	</div>
<?php endif; ?>
</nav>
