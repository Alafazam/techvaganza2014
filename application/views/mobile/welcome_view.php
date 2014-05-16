<style>
*{
font-family: "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.page-header{
border-bottom: 0px;
padding-bottom: 0px;
}
.list-group-item{
background: #000;
border:0px;

}
.list-group-item:hover{
background: #330F0F;
/*border:0px;*/
}
</style>
<div id="content" class="max-480">
  <div class="page-header container-fluid">
  	<img src="/images/tv.png" alt='Techvaganza' class="center" style="max-width:80%;display:block;margin:0 auto;" />
    <h1 class="center">Techvaganza 2014</h1>
    <!-- <h1><small>Annual techfest of NIT Srinagar</small></h1> -->
  </div>
  <div class="nav nav-tabs nav-justified">
    <ul class="list-group center">
      <li class="list-group-item"><a href="/">Home</a>         </li>
      <?php 
			if(isset($username))
			{
				echo    '<li><a class="list-group-item" href="/home">My Dashboard</a></li>';
			}
			
		?>
      <li class="list-group-item"><a href="/aboutus">About Us</a>      </li>
      <li class="list-group-item"><a href="/events">Events</a>       </li>
      <li class="list-group-item"><a href="/comingsoon">Workshops</a>    </li>
      <li class="list-group-item"><a href="/hospitality">Hospitality</a>  </li>
      <li class="list-group-item"><a href="/contacts">Contact</a>      </li>
      <!-- <li class="list-group-item"><a href="/sponsors">Sponsors</a>      </li> -->
    </ul>
  </div>
</div>