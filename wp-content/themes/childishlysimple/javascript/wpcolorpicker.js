jQuery(document).ready(function($){
    $('.childishlysimple-colors').wpColorPicker(
    options = {
        color: false,
        mode: 'hsl',
        controls: {
            horiz: 's', // horizontal defaults to saturation
            vert: 'l', // vertical defaults to lightness
            strip: 'h' // right strip defaults to hue
        },
        hide: true, // hide the color picker by default
        border: true, // draw a border around the collection of UI elements
        target: false, // a DOM element / jQuery selector that the element will be appended within. Only used when called on an input.
        width: 100, // the width of the collection of UI elements. Doesn't work?
        //  palettes: ['#125', '#459', '#78b', '#ab0', '#de3', '#f0f'],
        palettes: true // show a palette of basic colors beneath the square.
       
    }
    );
});
// http://automattic.github.com/Iris/
// http://make.wordpress.org/core/2012/11/30/new-color-picker-in-wp-3-5/

    
    
