$(function () {

    var btn = '#goodsListToggle button';
    $(btn).on('click', function () {
        $(btn).toggleClass('active');
        $('#appList').toggleClass('list-view');
    });

    var t = $('#test');
    // t.text('hello world');

    var setting = {
        login: 'login',
        password: 'password',
        chart: 3,
    };

    // t.text(JSON.stringify(setting.login));
    localStorage.setItem('setting', JSON.stringify(setting));


});
console.log("ff");

function name(arguments) {

}

var settings = {
    userName: "Вася Пучков",
    favotiteCount: 7
};


function readSettings(stngs) {
    var name = stngs.userName || 'Добро пожаловать!';
    $('#userName').text(name);
    $('#favotiteCount')
        .append(getLabel(stngs.favotiteCount))
}

function getLabel(n) {
    return n > 0 ? '<span class = "label label-success">' + n + '</span>' : null;

}

$(function () {

    readSettings(JSON.parse(localStorage.getItem('settings')));
    localStorage.setItem('settings', JSON.stringify(settings));
});


