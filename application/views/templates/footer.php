                        </div>
                    </div>
                </div><!-- /scroller-inner -->
                          
            </div><!-- /scroller -->
        </div><!-- /pusher -->
        </div><!-- /container -->
        <div id="loader" class="pageload-overlay" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none" >
                <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"/></path>
            </svg>
        </div><!-- /pageload-overlay -->
    </div><!--/pagewrap-->
        
    
<script src="/js/ajax.js"></script>
<script src="/js/classie.js"></script>
<script src="/js/mlpushmenu.js"></script>

<script>

var mlPushMenu = new mlPushMenu(document.getElementById('mp-menu'), document.getElementById('trigger'));
var body = document.body,
    ajaxPages = [],
    currentPage = 0,
    ajaxTriggerLoading = [].slice.call(body.querySelectorAll('a.icallajax')),
    ajaxLoader = new SVGLoader(document.getElementById('loader'), ajaxPages, 0, {
        speedIn: 500,
        easingIn: mina.easeIn
    });


// ajaxTriggerLoading.push(document.getElementById('csgo'));

// Update the page content.
var updateContent = function(stateObj) {
	dynamic = document.getElementById('dynamic');
  if (stateObj) {
    dynamic.innerHTML = stateObj.content;
  }
  updateLinks();
};

function init() {
    var dynamic = document.getElementById('dynamic');
    ajaxTriggerLoading.forEach(function(trigger) {
        trigger.addEventListener('click', function(ev) {
            ev.preventDefault();
            mlPushMenu._resetMenu();
            ajaxLoader.show();
			var title = trigger.href,
                ajaxUrl =  title+'/ajax',
                newUrl =  title;
			var stateObject = {
				//'content': dynamic.innerHTML,
				'url':newUrl,
				'oldurl':location.pathname
				};               
			history.pushState(stateObject, title, newUrl);
			
			window.setTimeout(function(){				
				ajax.get(ajaxUrl, {}, function(data) {
					var stateObject = {
						//'content': dynamic.innerHTML,
						'url':newUrl,
						'oldurl':location.pathname
						};
					updateContent({'content':data});                
					history.pushState(stateObject, title, newUrl);
					if (star.open) {star.wind()};
					setTimeout(function() {
					ajaxLoader.hide();
					}, 1000);
				},false);
			},600);
            
        });
    });
}

init();


function updateLinks() {
    var dynamic = document.getElementById('dynamic');
    ajaxTriggerLevelLoading = [].slice.call(dynamic.querySelectorAll('a.icallajax'));
    ajaxTriggerLevelLoading.forEach(function(trigger) {
        trigger.addEventListener('click', function(ev) {
            ev.preventDefault();
            ajaxLoader.show();
            mlPushMenu._resetMenu();
            window.setTimeout(function() {
                var title = trigger.href,
                    ajaxUrl = title + '/ajax',
                    newUrl = title;
                ajax.get(ajaxUrl, {}, function(data) {
                    var stateObject = {
                        'url': newUrl,
                        'oldurl': location.pathname
                    };
                    updateContent({
                        'content': data
                    });
                    history.pushState(stateObject, title, newUrl);
                    if (star.open) {
                        star.wind()
                    };
                    setTimeout(function() {
                        ajaxLoader.hide();
                    }, 1000);
                },false);
            }, 600);
        });

    });
};


</script>
     <!-- // <script src="/js/coming_soon.js"></script> -->
    <script src="/js/star.js"></script>

    <script>      
window.onload = function() {
	console.log("%cIf you can read this, you are cheating! D:", "color: red; font-size: x-large");

    var viewport = document.getElementById('viewport');
    if (window.location.pathname==='/'||window.location.pathname==='index'||window.location.pathname==='index.php'||window.location.pathname==='welcome') {
        star = new Star(viewport, menu_Items);
        window.star = star;
        star._unwind();
        //star._wind();
    }else{
        if (classie.hasClass(this.viewport, 'unwinded')) {
        classie.removeClass(this.viewport, 'unwinded');
        classie.addClass(this.viewport, 'winded');
        };
        star = new Star(viewport, menu_Items);
        // window.star = star;
        // star.wind();
    }


    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-40855347-1', 'techvaganza.org');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');

};
// Update the page content when the popstate event is called.
window.onpopstate = function(event) {
    if (window.location.pathname === '/' || window.location.pathname === 'index' || window.location.pathname === 'index.php' || window.location.pathname === 'welcome') {
        window.location.pathname = '/';
    } else {
        ajaxLoader.show();
        window.setTimeout(function() {
            ajax.get(location.pathname + '/ajax', {}, function(data) {
                updateContent({
                    'content': data
                });
				if (star.open) {star.wind()};
                setTimeout(function() {
                    ajaxLoader.hide();
                }, 1000);
            }, false);
        }, 600);

    };
};
</script>
    </body>
</html>