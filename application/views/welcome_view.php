                            <div id='top-sticky'>                                       
                                <img id="techv" src="/images/tv.png"/>
                                <div>
                                    <span>TECHVAGANZA</span>
                                    <p>2013</p>
                                </div>                                        
                            </div><?php
										if(isset($home)){
											echo "<script>var curtime =" .(time()*1000)."</script>"
									?>  
										<div id="timer-wrapper" >
											<div id="tvza-timer"></div>                
										</div>
										<script src="/js/hexaflip.js"></script>
									<?php
										}
									?>
