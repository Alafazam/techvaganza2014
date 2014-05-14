	<div class="btn-group btn-group-justified bottom_stiatic">
			<div class="btn-group">
				<a  class="btn btn-default" href="/">Home</a>
			</div>
			<div class="btn-group">
				<a  class="btn btn-default" href="/contacts">Contact Us</a>
			</div>
			<div class="btn-group">
				<a class="btn btn-default" 
				<?php 
					
					$username= $this->session->userdata('logged_in');
					$username=$username['username'];
					if(isset($username))
					{
						echo    ' href="/home/logout">Logout';
					}
					else
					{
						echo    ' href="/login">Login';
					}
				?></a>
  			</div>
		</div>
	</div>
	<script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
		ga('create', 'UA-40855347-1', 'techvaganza.org');
		ga('require', 'displayfeatures');
		ga('send', 'pageview');
	
	</script>
</body>
</html>