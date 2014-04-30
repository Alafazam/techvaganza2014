
					</div> 
				</div><!-- /scroller-inner -->
			</div><!-- /scroller -->
		</div><!-- /pusher -->
    </div><!-- /container -->
    <script src="<?=base_url()?>js/classie.js"></script>
	<script src="<?=base_url()?>js/mlpushmenu.js"></script>
    <script>
        new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
        //(function() {
				var pageWrap = document.getElementById( 'contain' ),
				 navMenu = document.getElementById( 'mp-menu' ),
					pages = [].slice.call( pageWrap.querySelectorAll( 'div.container' ) ),
					currentPage = 0,
					triggerLoading = [].slice.call( navMenu.querySelectorAll( 'a.pageload-link' ) ),
					loader = new SVGLoader( document.getElementById( 'loader' ),pages,currentPage, { speedIn : 300, easingIn : mina.easeIn } );
				function init() {
					triggerLoading.forEach( function( trigger ) {
						trigger.addEventListener( 'click', function( ev ) {
							ev.preventDefault();
							loader.show();
							mlPushMenu._resetMenu();

							// after some time hide loader
							setTimeout( function() {
								loader.hide();
							}, 2000 );
						} );
					} );	
				}


				init();

//			})();

		

    </script>
        <script src="<?=base_url()?>js/star.js"></script>

	</body>
</html>