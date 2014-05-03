var textArray = ['Events', 'Workshops', 'Hospitality', 'Contacts', 'Sponsers', 'Gallary']
var shades = ['#fe9601', '#D92B48', '#00A03E', '#0241E2', '#ED00F4', '#00d2f1', '#6ABED8', '#D92B48', '#00A03E', '#0241E2', ]
var menu_Items = 6;
var timing = 750;
//more colors
//00b796   0DC9F7    982395     FF534B
//86289b   D99FD3    1352A2


window.onload = function() {

    // console.log("window.innerHeight:"+window.innerHeight+"\ny:"+y+"\nty:"+ty+"\npivots[1]:"+pivots[1]+"\npivots[0]"+pivots[0]);
    var viewport = document.getElementById('viewport');
    if (viewport) {
        star = new Star(viewport, menu_Items);
        window.star = star;
        star._unwind();
        //star._wind();
    }

};

function Star(viewport, menu_Items) {
    this._Star = this;
    this.viewport = viewport;
    classie.removeClass(this.viewport, 'winded');
    classie.addClass(this.viewport, 'unwinded');
    this.sub_menus = menu_Items;
    this.fin = Snap.select('#snap1');
    this.pivots = [Math.round(this.fin.getBBox().w) / 2, Math.round(this.fin.getBBox().h + 1) / 2];
    var star = Snap.select('#star');
    this.g = star.g();
    this.fins = [];
    this.grades = [];
    this.shades = [];
    this.g.attr({
        id: 'star_g',
        width: '400px',
        height: '400px',
        transform: 't135,20'
    });
    for (var i = 0; i < this.sub_menus; i++) {
        if (i == 0) {
            var wrapper = this.fin.parent();
            wrapper.attr('id', 'g' + i);
            wrapper.appendTo(this.g);
            this.fins[0] = this.fin;

        };
        if (i != 0) {
            var wrapper = this.g.g();
            wrapper.attr({
                id: 'g' + i,
                class: 'path_wrapper',
            });
            // var finlogo = this.fin.clone();
            // finlogo.attr('path', logo);
            // wrapper.add(finlogo);
            this.fins[i] = this.fin.clone();
            wrapper.add(this.fins[i]);
        };
        this.grades[i] = star.gradient('l(0,0,0,1)' + shades[i] + '-rgba(000,000,000,1)');
        this.fins[i].attr({
            fill: this.grades[i],
            'fill-opacity': 0.5
        });
    }
}



Star.prototype._addShades = function(shades) {
    for (var i = this.sub_menus - 1; i >= 0; i--) {
        this.shades[i] = shades[i];
    };
};



Star.prototype._unwind = function(link) {
    var self = this;
    classie.removeClass(this.viewport, 'winded');
    classie.addClass(this.viewport, 'unwinded');
    for (var i = this.sub_menus - 1; i >= 0; i--) {
        var wrapper = Snap.select('#g' + i);
        wrapper.animate({
            transform: 's2.0' + 'r' + (i * (360 / this.sub_menus)) + 't' + this.pivots[0] + ',-' + this.pivots[1],
            // transform: 's2.0' + 'r' + (i * (360 / VALUES.sub)) + 't' + (VALUES.pivots[0] - 2) + ',-' + (VALUES.pivots[1] + 2),
            opacity: 1,
            'box-shadow': '5px'
        }, 320 + (i * (360 / this.sub_menus)), mina.easeout);
        //adding event handlers

        this.fins[i].click(function(event) {
            //for node id
            // console.log(this.parent().node.id);
            var myregExp = /\d/;
            no = Number(myregExp.exec(this.parent().node.id)[0]);
            //alert("Let the force be with you :"+i+'');
            self._wind(this);
            setTimeout(overlay, 1300);

            function overlay(argument) {
                loader.show();
                // after some time hide loader
                setTimeout(function() {
                    loader.hide();
                    if (loader.current_page != -1) {
                        classie.removeClass(loader.pages[loader.current_page], 'show');
                    }
                    loader.current_page = no;
                    // console.log('asdsfdf');
                    classie.addClass(loader.pages[loader.current_page], 'show');
                }, 1000);
            }

            // console.log(leaf);
            this.parent().select('#svgTextElement').remove();
        });
        this.fins[i].hover(function() {
            //     /* Stuff to do when the mouse enters the element */
            showMenuText(this);
        }, function() {
            //     /* Stuff to do when the mouse leaves the element */
            hideMenuText(this);
        }, this.fins[i], this.fins[i]);
    };
};

Star.prototype._wind = function(el) {
    var id = el.parent().attr('id');
    for (var j = this.sub_menus - 1; j >= 0; j--) {
        var elem = Snap.select('#g' + j);
        var transformedMatrix = elem.attr('transform')['diffMatrix'];
        var inverseMatrix = transformedMatrix.invert();
        inverseMatrix.translate(380, 135);
        inverseMatrix.scale(3, 3, 50, 200);
        if (elem[1]) {
            elem[0].remove();
        };

        elem[0].unhover();
        elem[0].unclick();
        var aCallback = '';
        if (j == 0) {
            aCallback = next;
        };

        elem.animate({
                // fill: grad,
                // 'fill-opacity': 1,
                'fill-opacity': 0.4,
                transform: inverseMatrix.toTransformString(),
            },
            220 + (j * (360 / this.sub_menus)), mina.linear, aCallback);
        //,wind_star_callback
    };
    // }, 1400)
    function next() {
        classie.removeClass(star.viewport, 'unwinded');
        classie.addClass(star.viewport, 'winded');
        // callback();
    }
    //  TODO :bind click even handlers for open_next_menu
};


showMenuText = function(el) {
    el.animate({
        'fill-opacity': 0.9
    }, 100);
    var leaf = el.parent();
    id = "" + leaf.node.id;
    var myregExp = /\d/;
    no = Number(myregExp.exec(id)[0]);
    leaf_rotaton = leaf.transform()['globalMatrix'].split()['rotate'];
    text_rotation = [0, 60, -60, 0, 60, -60];
    var svgTextElement = leaf.text(0, 0, textArray[no]).attr({
        fill: 'white',
        id: 'svgTextElement',
        fontSize: '30px',
        opacity: 0,
        "text-anchor": "middle",
        // transform: 't70,200' + 'r' + ((-leaf_rotaton))
        transform: 't70,200' + 'r' + ((-leaf_rotaton))

    });
    Snap.animate(0, 1, function(value) {
        //svgTextElement.transform('s' + value   );                          // Animate by transform
        svgTextElement.attr({
            'font-size': value * 12,
            opacity: value,
            transform: 't70,200' + 'r' + ((-leaf_rotaton) + ((value) * text_rotation[no]))
        }); // Animate by font-size ?
    }, timing, mina.bounce);
    //TODO ADD TEXT,SHADOW,SOME BLUR ON HOVER
}

hideMenuText = function(el) {
    el.animate({
        'fill-opacity': 0.5
    }, 100);
    el.parent().select('#svgTextElement').remove();
}

Star.prototype._next_menu = function() {};