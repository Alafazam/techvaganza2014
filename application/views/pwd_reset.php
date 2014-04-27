                        <div>
                            <form method="POST" >
                                <input type="password" placeholder="New Password" name="password"/>
                                <input type="password" placeholder="Confirm Password" name="c_password"/>
                                <input type="submit" value="Send Reset Code" />
                            </form>
                            
                            <div class="message"><?=validation_errors()?></div>
                        </div>