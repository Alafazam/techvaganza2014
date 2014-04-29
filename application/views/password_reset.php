			<div class='max-300'>
            	<form class="glass" method="POST" action="/login/password" >
                	<p class="clearfix">
                    	<label for='email'>Email</label>
                		<input type="email" placeholder="Enter Your email" id='email' name="email"/>
                    </p>
                    <p class="clearfix">
                    	<input type="submit" value="Send Reset Code" />
                    </p>
                </form>
                
                <?php if($e=$message) echo '<div class="message glass center">'.$e.'</div>'?>
            </div>