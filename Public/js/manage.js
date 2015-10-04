//sortable
/*var el = document.getElementById('items');
var sortable = Sortable.create(el);*/
var hide_home_view = false;
Sortable.create($("#user-tabs")[0], {
        animation: 150,});

window.localStorage.clear();
window.localStorage.sort = 'welcome ';

function tab (_this) {
    var text = $(_this).text();
    var dom = $(".sidebar-content a:contains(" + text + ")");
    var nav_dom = $("#user-tabs a:contains(" + text + ")");
    if (_this == $("#user-tabs .active")[0]) {
        return false;
    }
    if (nav_dom.length) {
        _this = nav_dom.parent()[0];
    }
    sortTab(text);
    createBreadCrumb(dom);
    clearNav(text);
    setTimeout(function () {
        $(_this).addClass('active');
        $($(_this).find('a').attr('href')).addClass('active');
    },0);
    // return false;
};
function clearNav (text) {
    $("#user-tabs .active").removeClass('active');
    $("#user-tab-content .active").removeClass('active');
    if (checkTabExit(text)) {
        return false;
    } else {
        return true;
    }
};
function refresh (_this, url, data_tab) {
    var text = $(_this).text();
    var data_tab = data_tab || text;
    var url = url || getAlinkHref(text);
    loadding($(_this).find('i'));
    $("#" + data_tab).html('');
    // return;
    getTabContent(url, data_tab, function (response) {
            $("#" + data_tab).html(response);
            unloading($(_this).find('i'));
        });
};
function loadding ($dom) {
    $dom.removeClass('gi gi-remove_2').addClass('fa fa-undo rotateInfi');
};
function unloading ($dom) {
    $dom.removeClass('fa fa-undo rotateInfi').addClass('gi gi-remove_2');
};
function sortTab (id) {
    var sort = window.localStorage.sort;
    if (sort.indexOf(id) != -1) {
        var sp = sort.split(id + ' ');
        window.localStorage.sort = sp.join('') + id + ' ';
    } else {
        window.localStorage.sort += id + ' ';
    }
};
function getPrevSort (id) {
    var sort = window.localStorage.sort;
    var sp = sort.split(id.substr(1) + ' ');
    var st = sp.join('');
    window.localStorage.sort = st;
    var tmp_arr = st.trim().split(' ');
    return tmp_arr[tmp_arr.length - 1];
};
function removeTab (_this) {
    var id = $(_this).parent().attr('href');
    $(_this).parents('li').remove();
    $(id).remove();
    var prevSort = getPrevSort(id);
    $("#user-tabs a:contains(" + prevSort + ")").parent().addClass('active');
    $('#' + prevSort).addClass('active');
    if (!checkNavEmpty()) {
        $("#user-nav-top").hide();
        $("#home-view").show();
        hide_home_view = false;
    }
    event.stopPropagation();
    event.preventDefault();
};
function createTabNav (text, data_tab) {
    $("#user-tabs").append($('<li onclick="return tab(this);" ondblclick="refresh(this);" class="active"><a href="#' + data_tab + '">' + text + '<i class="gi gi-remove_2" onclick="removeTab(this);"></i></a></li>'));
    $("#user-tab-content").append($('<div class="tab-pane active" id="' + data_tab + '">' + text + '</div>'));
};
function checkNavEmpty () {
    return $("#user-tabs li").length;
};
function getAlinkHref (text) {
    var dom = $(".sidebar-content a:contains(" + text + ")");
    return dom.attr('href');
};
function getTabContent (url, data_tab, fn) {
    $.ajax({
        type : 'post',
        data : {},
        url : url,
        success : fn || function (response) {
            $("#" + data_tab).html(response);
        }
    });
};
function checkTabExit (text) {
    return $("#user-tabs li:contains(" + text + ")").length;
};
function resetLeftNavActive (dom_a) {
    $("#sidebar").find('.active').removeClass('active');
    $(dom_a).addClass('active');
};
function createBreadCrumb (dom) {
    if ($(dom).parents('ul').prevAll('.sidebar-nav-menu').length) {
        var original = $(dom).parents('ul').prevAll('.sidebar-nav-menu').parent().prevAll('.sidebar-header').eq(0).text();
        var sub = $(dom).parents('ul').prevAll('.sidebar-nav-menu').eq(0).text();
        var t = $(dom).text();
        var crumb = '<li>' + original + '</li>';
        crumb += '<li>' + sub + '</li>';
        crumb += '<li>' + t + '</li>';
        $("#user-breadscrumb").html(crumb);
    } else {
        var original = $(dom).parent().prevAll('.sidebar-header').eq(0).text();
        var sub = $(dom).text();
        var crumb = '';
        if (original) {
            crumb = '<li>' + original + '</li>';
        }
        crumb += '<li>' + sub + '</li>';
        $("#user-breadscrumb").html(crumb);
    }
};

$(".ajaxLink").click(function () {
    var url = $(this).attr('href') || $(this).attr('data-href');
    var data_tab = $(this).attr('data-tab');
    var text = $(this).text();
    if (!hide_home_view) {
        hide_home_view = true;
        $('#home-view').hide();
        $("#user-nav-top").show();
    }
    tab(this);
    setTimeout(function () {
        var nav_dom = $("#user-tabs a:contains(" + text + ")");
        refresh(nav_dom, url, data_tab);
    },0);
    resetLeftNavActive(this);
    if (clearNav(text)) {
        createTabNav(text, data_tab);
    }

    return false;
});

$("#user-tab-content").click(function (ev) {
    if ($(ev.target).hasClass('ajaxLink') || $(ev.target).parents('a').hasClass('ajaxLink')) {
        var url = $(ev.target).attr('href') || $(ev.target).parents('a').attr('href');
        var data = $(ev.target).attr('data') || $(ev.target).parents('a').attr('data');
        $.ajax({
            type : 'post',
            data : data,
            url : url,
            success : function (response) {
                var response = JSON.parse(response);
                for (i in response) {
                    if (i == 'dialog') {
                        eval(response['dialog']);

                    } else if (i.indexOf('eval')  != -1) {
                        eval(response[i]);
                    }
                }
            }
        });
        return false;
    };
});
function callBack (html) {
    // alert(html);
    $('body').append(html);
    $('#mask').modal('show');
};
function showMask () {
    $("#mask").show();
}