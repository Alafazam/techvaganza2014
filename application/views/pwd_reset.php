                        <div class='max-300'>
                            <form method="POST" class='glass' >
                            	<p class="clearfix">
                                	<label for="password">Password:</label>
                                	<input type="password" placeholder="New Password" id="password" name="password"/>
                                </p>
                                <p class="clearfix">
                                	<label for="c_password">Confirm Password:</label>
                                	<input type="password" placeholder="Confirm Password" id="c_password" name="c_password"/>
                                </p>
                                <p class="clearfix">
                                	<input type="submit" value="Send Reset Code" />
                                </p>
                            </form>
                            
                            <?php if($e=validation_errors()) echo '<div class="message glass center">'.$e.'</div>'?>
                        </div>