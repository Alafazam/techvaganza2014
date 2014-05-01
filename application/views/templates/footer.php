						</div><!-- /scroller-inner -->
                        <?php
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
					</div><!-- /scroller -->

				</div><!-- /pusher -->
			</div><!-- /container -->

			<div id="loader" class="pageload-overlay" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none" >
					<path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"/></path>
				</svg>
			</div><!-- /pageload-overlay -->
		</div><!--/pagewrap-->
        
    

    <script src="/js/classie.js"></script>
	<script src="/js/mlpushmenu.js"></script>
    <script>
       var mlPushMenu =  new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
				// var pageWrap = document.getElementById( 'akt_content' ),
				//  navMenu = document.getElementById( 'mp-menu' ),
				// 	pages = [].slice.call( pageWrap.querySelectorAll( 'div.container' ) ),
				// 	currentPage = 0,
				// 	triggerLoading = [].slice.call( navMenu.querySelectorAll( 'a.pageload-link' ) ),
				// 	loader = new SVGLoader( document.getElementById( 'loader' ),pages,currentPage, { speedIn : 300, easingIn : mina.easeIn } );
				// function init() {
				// 	triggerLoading.forEach( function( trigger ) {
				// 		trigger.addEventListener( 'click', function( ev ) {
				// 			ev.preventDefault();
				// 			loader.show();
				// 			mlPushMenu._resetMenu();
				// 			// after some time hide loader
				// 			setTimeout( function() {
				// 				loader.hide();
				// 			}, 2000 );
				// 		} );
				// 	} );	
				// }


				// init();
				var pageWrap = document.getElementById( 'contain' ),
				 navMenu = document.getElementById( 'mp-menu' ),
					pages = [].slice.call( pageWrap.querySelectorAll( 'div.container' ) ),
					currentPage = 0,
					triggerLoading = [].slice.call( navMenu.querySelectorAll( 'a.pageload-link' ) ),
					loader = new SVGLoader( document.getElementById( 'loader' ),pages,currentPage, { speedIn : 500, easingIn : mina.easeIn } );
					triggerLoading.push(document.getElementById('csgo'));
					console.log(triggerLoading[triggerLoading.length-1]);
				


				function init() {
					triggerLoading.forEach( function( trigger ) {
						trigger.addEventListener( 'click', function( ev ) {
							ev.preventDefault();
							loader.show();
							mlPushMenu._resetMenu();
							//remove this if conditioin afterwords
							if (!star.coming_soon) {
                        		star.coming_soon = true;
                        		classie.addClass(pages[loader.current_page], 'show');
                        		star.wind();
                    		} else {
                        		classie.removeClass(pages[loader.current_page], 'show');
                    			star.coming_soon=false;
                        		
                        		setTimeout( function() {
								star._unwind();
							}, 1000 );

                    		}
                    		//till here
							setTimeout( function() {
								loader.hide();
							}, 2000 );
							// after some time hide loader

						} );
					} );	
				}


				init();

		

    </script>
        <script src="/js/coming_soon.js"></script>

	</body>
</html>