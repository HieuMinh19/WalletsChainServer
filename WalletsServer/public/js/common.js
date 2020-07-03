
/**
 * First we will load all common of this project's JavaScript dependencies .
 *
 *
 */

/**
 * Default loading animation
 *
 */

var processingAnimate = "<div class='spinner-grow text-primary' role='status'><i class='fa fa-spinner fa-spin' style='font-size:24px'></i><br/> Loading...</div>";



/**
 * Field Require
 *
 */

var form_group_tag = $("div.form-group.required").children('label');
form_group_tag.attr('title', 'This field is required');


/**
 * Active Submenu
 * Circle
 */
var subMenu_active = $("a.nav-link.active").children('i.fa.fa-circle-o.nav-icon');
subMenu_active.css('color', '#007bff')


/**
 * Validation
 *
 */
function OnlyInputNumberDot(event) {
    var isRightType = doOnlyContainNumber();
    if (!isRightType) {
        event.preventDefault();
    }
    function doOnlyContainNumber() {
        var pattern = /^[0-9.]+$/;
        return pattern.test(String.fromCharCode(event.which));
    }
};

/**
 * Validation
 * for copy aand paste
 */
function BlockPasteRate(event) {
    if (typeof event.clipboardData !== 'undefined')
        var text = event.clipboardData.getData('text/plain');
    else var text = window.clipboardData.getData('Text');
    var pattern = /^[0-9.]+$/;
    if (!pattern.test(text)) event.preventDefault();
};

/**
 * Bootstrap Notify message
 *
 */
function NotifyMe(message) {
    $.notify({
        // options
        title: "BMS: ",
        message: message
    }, {
            // settings
            // type: 'success',
            type: 'minimalist',
            offset: {
                x: 550,
                y: 20
            },
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                '<img data-notify="icon" class="img-circle pull-left">' +
                '<span data-notify="title">{1}</span>' +
                '<span data-notify="message">{2}</span>' +
                '</div>'
        });
}

/**
 * format money
 *
 */
function formatMoney(n, c, d, t) {
    var c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;

    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
