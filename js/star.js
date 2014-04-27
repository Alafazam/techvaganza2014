var text = 'Lorem Ipsum Dolor Sit Amet';
var textArray = text.split(' ');
var len = textArray.length;
var timing = 750;
var ongoing_animation = [];
var menu_star_open = 1;
var colors = []
var shades = ['#fe9601', '#D92B48', '#00A03E', '#0241E2', '#ED00F4', '#00d2f1', '#6ABED8', '#D92B48', '#00A03E', '#0241E2', ]
var menu_Items = 6;
//00b796   0DC9F7    982395     FF534B
//86289b   D99FD3    1352A2

function init(VALUES) {
    menu_star_open = 1;
    fins = [];

    //console.log("window.innerHeight  "+window.innerHeight+'  y: '+y+' p:' +pivots[1]);
    // var ty = VALUES.y - (2.5 * VALUES.pivots[0]),
    //     tx = VALUES.x - VALUES.pivots[0];
    VALUES.g.attr({
        id: 'star_g',
        width: '400px',
        height: '400px',
        //transform: 't'+VALUES.pivots[0]+200+','+200+VALUES.pivots[0]
        transform: 't135,20'
    });

    var grad = Snap('#star');
    var wrapper;
    for (var i = 0; i < VALUES.sub; i++) {
        if (i == 0) {
            wrapper = VALUES.fin.parent();
            wrapper.attr('id', 'g' + i);
            wrapper.appendTo(VALUES.g);

            fins[0] = VALUES.fin;
        };
        if (i != 0) {
            wrapper = VALUES.g.g();
            wrapper.attr('id', 'g' + i);
            fins[i] = VALUES.fin.clone();
            wrapper.add(fins[i]);
        };
        var grade = grad.gradient('l(0,0,0,1)' + shades[i] + '-rgba(000,000,000,1)');
        //console.log();
        // var s = Snap().gradient('l(1,0,0,0)rgba(255,0,0,1.0)-rgba(000,000,000,1)');
        // console.log(s.innerSVG());
        fins[i].attr({
            fill: grade,
            //fill: 'rgba(' + (i * 5) + ',' + ((5 - i) * 3) + ',' + (i * 5) + ')',
            'fill-opacity': 0.9
            //TODO SELECT A GOOD COLOR
        });
        fins[i].click(function(event) {
            /* TODO ADD THE EVENT */
            //alert("Let the force be with you :"+i+'');
            wind_star(this);
        });

        fins[i].hover(function() {
            showMenuText(i, this);
            //     /* Stuff to do when the mouse enters the element */
            //     //CALL A FUNCTION TO SHOW MENU NAME
        }, function() {

            hideMenuText(i, this);
            //     /* Stuff to do when the mouse leaves the element */
            //     //CALL A FUNCTION TO HIDE MENU NAME
        }, fins[i], fins[i]);

        wrapper.animate({
            transform: 's2.0' + 'r' + (i * (360 / VALUES.sub)) + 't' + VALUES.pivots[0] + ',-' + VALUES.pivots[1],
            // transform: 's2.0' + 'r' + (i * (360 / VALUES.sub)) + 't' + (VALUES.pivots[0] - 2) + ',-' + (VALUES.pivots[1] + 2),
            opacity: 1,
            'box-shadow': '5px'
        }, 320 + (i * (360 / VALUES.sub)), mina.easeout);
        //console.log('' + i + ' :' + (320 + (i * (720 / VALUES.sub))));
    };
};

function showMenuText(i, el) {
    el.animate({
        'fill-opacity': 0.4
    }, 100);

    var element = el.parent();
    var pat = /\d/;
    var id = pat.exec(element.attr('id'))[0];



    // //stop any ongoing animation
    // for (var i = ongoing_animation.length - 1; i >= 0; i--) {
    //     console.log(ongoing_animation);
    //     ongoing_animation[i]['el'].stop();
    //     ongoing_animation.pop();
    // };

    // gElement = el.parent();
    // console.log(gElement);
    // // // var t = Snap.parseTransformString(gElement[0].attr('transform').global)
    // var tm = gElement[0].attr('transform')['globalMatrix'];
    // console.log(tm);
    // var x = tm.split();
    // console.log(x);

    // console.log(x['rotate']);
    // tm.rotate("-" + x['rotate']);

    // console.log(tm);


    // var svgTextElement = gElement.text(350, 100, 'text').attr({
    //     fontSize: '1.1em',
    //     opacity: 0,
    //     //"text-anchor": "middle",
    //     transform: tm
    // });

    // console.log(svgTextElement);
    // svgTextElement.animate({
    //         fontSize: '1.3em',
    //         opacity: 1
    //     },
    //     1000, mina.linear);
    // setTimeout(function() {
    //     Snap.animate(0, 1, function(value) {
    //         //svgTextElement.transform('s' + value   );                          // Animate by transform
    //         svgTextElement.attr({
    //             'font-size': value * 100,
    //             opacity: value
    //         }); // Animate by font-size ?
    //     }, timing, mina.bounce, function() {
    //         svgTextElement.remove()
    //     });
    // }, 1000)

    //TODO ADD TEXT,SHADOW,SOME BLUR ON HOVER
}

function hideMenuText(i, el) {
    el.animate({
        'fill-opacity': 0.9
    }, 100);

    //TODO HIDE ALL THAT

    // //stop any ongoing animation
    // for (var i = ongoing_animation.length - 1; i >= 0; i--) {
    //     ongoing_animation[i][1].stop();
    //     ongoing_animation.pop();
    // };

}

function wind_star(el, callback) {

    var id = el.parent().attr('id');
    element = el.parent();

    for (var j = menu_Items - 1; j >= 0; j--) {

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

        var callback = '';
        if (j == 0) {
            callback = unwind_move;
        };
        //var grad = Snap().gradient('l(1,0,0,0)' + shades[j] + '-rgba(000,000,000,1.0)');
        elem.animate({
                // fill: grad,
                // 'fill-opacity': 1,
                'fill-opacity': 0.4,
                transform: inverseMatrix.toTransformString(),
            },
            220 + (j * (360 / menu_Items)), mina.linear, callback);
        //,wind_star_callback
    };

    function unwind_move() {
        Snap.select('#g' + (menu_Items - 1))[0].attr('fill', el.attr('fill'));
        var star_g = element.parent();
        var viewport = star_g.parent().parent();
        viewport = document.getElementById(viewport.attr('id'));
        viewport.style.left = '-6%';
        viewport.style.top = '0%';
        viewport.style.marginTop = '-300px';
        viewport.style.webkitTransform = 'rotateX(180deg)';
        viewport.style.mozTransform = 'rotateX(180deg)';
        viewport.style.msTransform = 'rotateX(180deg)';
        viewport.style.oTransform = 'rotateX(180deg)';
        viewport.style.transition = 'rotateX(180deg)';
    }
    //  TODO :bind click even handlers for open_next_menu
    // TODO : BIND HOVER HANDLERS
}

function open_Next_Menu(i, el) {
    // will be called when menu_star is already closed

}

function unwind_Star(argument) {
    // open on pressing back button
    // bind clickevent handlers
}

window.onload = function() {
    x = window.innerWidth / 2;
    y = window.innerHeight / 2;

    var sub_menus = menu_Items,
        fin = Snap.select('#snap1'),
        pivots = [Math.round(fin.getBBox().w) / 2, Math.round(fin.getBBox().h + 1) / 2],
        star = Snap.select('#star'),
        g = star.g();
    // console.log("window.innerHeight:"+window.innerHeight+"\ny:"+y+"\nty:"+ty+"\npivots[1]:"+pivots[1]+"\npivots[0]"+pivots[0]);
    init({
        'pivots': pivots,
        'fin': fin,
        'sub': sub_menus,
        'g': g,
        'x': x,
        'y': y
    });

};


//Snap.parseTransformString()
//Snap.MAtrix()
//Matrix.toTransformString()