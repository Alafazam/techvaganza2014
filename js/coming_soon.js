var textArray = ['Events', 'Workshops', 'Hospitality', 'Contacts', 'Sponsors', 'Gallery']
var shades = ['#fe9601', '#D92B48', '#00A03E', '#0241E2', '#ED00F4', '#00d2f1', '#6ABED8', '#D92B48', '#00A03E', '#0241E2', ]
var menu_Items = 6;
var timing = 170;
//more colors
//00b796   0DC9F7    982395     FF534B
//86289b   D99FD3    1352A2



// console.log("window.innerHeight:"+window.innerHeight+"\ny:"+y+"\nty:"+ty+"\npivots[1]:"+pivots[1]+"\npivots[0]"+pivots[0]);
function Star(viewport, menu_Items) {
    this._Star = this;
    this.viewport = viewport;
    classie.removeClass(this.viewport, 'winded');
    classie.addClass(this.viewport, 'unwinded');
    this.sub_menus = menu_Items;
    this.star = Snap.select('#star');
    // console.log(star);
    this.fin = this.star.select('#g0');
    this.g = this.star.g();
    this.fins = [];
    // this.logos = [];
    this.grades = [];
    this.shades = [];
    this.g.attr({
        id: 'star_g',
    });
    this.pivots = [Math.round(this.fin.getBBox().w) / 2, Math.round(this.fin.getBBox().h + 1) / 2];
    this.coming_soon = false;

    for (var i = (this.sub_menus - 1); i >= 0; i--) {
        if (i == 0) {
            this.fin.appendTo(this.g);
            this.fins[0] = this.fin;
        };

        if (i != 0) {
            this.fins[i] = this.fin.clone();
            // console.log(this.fins[i]);
            this.fins[i].attr({
                id: 'g' + i,
                class: 'fin',
            });
            this.fins[i].appendTo(this.g);

        };
        //logo adding here
        // this.logos[i] = this.star.select('#l' + i).attr({
        //     transform: 'r(-' + ((360 / 6) * i) + ',507.47,260)',
        // });


        // this.fins[i].append(this.logos[i]);

        // this.fins[i].select("").remove();
        this.grades[i] = this.star.gradient('l(0,0,0,1)' + shades[i] + '-rgba(0,0,0,1)');
        this.fins[i].attr({
            fill: this.grades[i],
            'fill-opacity': 0.8
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
        var wrapper = this.star.select('#g' + i);
        var angle = (360 / this.sub_menus);
        wrapper.animate({
            transform: 'r(' + ((i) * angle) + ',300,300)' + 't' + this.pivots[0] + ',-' + this.pivots[1],
            opacity: 1,
            'box-shadow': '5px'
        }, 320 + (i * (360 / this.sub_menus)), mina.easeout);
        //adding event handlers
        this.fins[i].click(function(event) {
            self._wind(this);
            setTimeout(overlay, 1000);

            function overlay(argument) {
                loader.show();
                setTimeout(function() {
                    loader.hide();
                    star.coming_soon = true;
                    classie.addClass(pages[loader.current_page], 'show');

                }, 2000);
            }
            this.parent().select('#svgTextElement').remove();
        });


        this.fins[i].hover(function() {
            showMenuText(this);
        }, function() {
            hideMenuText(this);
        }, this.fins[i], this.fins[i]);
    };
};

Star.prototype._wind = function(el) {

    var fin = el;
    id = fin.attr('id');
    var myregExp = /\d/;
    var no = Number(myregExp.exec(id)[0]);
    var color = shades[no];
    for (var j = this.sub_menus - 1; j >= 0; j--) {
        var elem = Snap.select('#g' + j);
        var aCallback = '';
        if (j == 0) {
            aCallback = next;
        };
        elem.unhover();
        elem.unclick();
        elem.animate({
                'fill-opacity': 0.6,
                transform: 'r(0,300,300)',
            },
            120 + (j * (360 / this.sub_menus)), mina.linear, aCallback);
    };

    function next() {
        classie.removeClass(star.viewport, 'unwinded');
        classie.addClass(star.viewport, 'winded');
    }
};

Star.prototype.wind = function() {

    for (var j = this.sub_menus - 1; j >= 0; j--) {
        var elem = Snap.select('#g' + j);
        var aCallback = '';
        if (j == 0) {

            aCallback = next;
        };
        elem.unhover();
        elem.unclick();
        elem.animate({
                'fill-opacity': 0.6,
                transform: 'r(0,300,300)',
            },
            120 + (j * (360 / this.sub_menus)), mina.linear, aCallback);
    };

    function next() {
        classie.removeClass(star.viewport, 'unwinded');
        classie.addClass(star.viewport, 'winded');
    }
    //  TODO :bind click even handlers for open_next_menu
};


showMenuText = function(el) {

    var fin = el;
    id = fin.attr('id');
    // console.log(id);
    var myregExp = /\d/;
    no = Number(myregExp.exec(id)[0]);

    leaf_rotaton = fin.transform()['globalMatrix'].split()['rotate'];
    //console.log(leaf_rotaton);

    if (leaf_rotaton < 0) {
        leaf_rotaton += 360;
    };

    var svgTextElement = fin.text(530, 330, textArray[no]).attr({
        fill: '#fff',
        id: 'svgTextElement',
        fontSize: '30px',
        opacity: 1,
        "text-anchor": "middle",
        transform: 'r(-' + leaf_rotaton + ',530,330)'

    });
    Snap.animate(0, 1, function(value) {
        el.animate({
            'fill-opacity': value
        }, 100);
        svgTextElement.attr({
            'font-size': value * 30,
            opacity: value,
            //transform: 'r(' + (-leaf_rotaton) * (value) + ',530,330)'

        }); // Animate by font-size ?
    }, timing, mina.easeout);

}

hideMenuText = function(el) {
    el.animate({
        'fill-opacity': 0.8
    }, 100);
    el.parent().select('#svgTextElement').remove();
}

Star.prototype._next_menu = function() {};

Star.prototype.ajax_linking = function() {



};