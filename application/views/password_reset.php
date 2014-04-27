			<div>
            	<form method="POST" action="/login/password" >
                	<input type="email" placeholder="Enter Your email" name="email"/>
                    <input type="submit" value="Send Reset Code" />
                </form>
                
                <div class="message"><?=($message)?></div>
            </div>