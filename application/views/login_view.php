                        <div id='login'>
<?php echo validation_errors("<div class='error glass center'>",'</div>')?>
                            <form class="glass" action="<?=base_url()?>login/verify" method="post" accept-charset="utf-8">
                                <p class="clearfix">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" placeholder="Username">
                                </p>
                                <p class="clearfix">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" placeholder="Password"> 
                                </p>
                                <p class="clearfix half">
                                    <input type="checkbox" name="remember" id="remember" checked>
                                    <label for="remember">Remember me</label>
                                </p>
                                <p class="clearfix half">
                                    <input type="submit" name="submit" value="Sign in">
                                </p>
                                <p class="clearfix">
                                    <a href="<?=base_url()?>login/password" class="forgot">
                                        Forgot Password?
                                    </a>
                                </p>                      
                            </form>
                            <div class="glass">
                                <p class="clearfix">
                                    <a href="<?=base_url()?>register">
                                        <input type="submit" name="submit" value="Sign Up">
                                    </a>
                                </p>
                            </div>