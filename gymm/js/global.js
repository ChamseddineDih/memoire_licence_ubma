$(document).ready(function () {
    var idcon = $("input#idcon").val();
    var tpcon = $("input#tpcon").val();

    if(tpcon == 5) {
        load_content("div#display-tabs", "assets/behindcode/gym/list_admin.php");
    }
    else if(tpcon==1){
        $.post('assets/behindcode/gym/list_by_member.php', {idcon:idcon}, display_list_gym, 'text');
    }
    else if(tpcon==2) {
        list_gyms_by_manager();
    }
    else if(tpcon==4){
        load_content("div#display-tabs", "assets/behindcode/assiduity/list.php");
    }
});

function load_content(selector, path) {
    $(selector).load(path);
}

function reload_page() {
    window.location.reload();
}

function display_tabs(code) 
{
    switch(code)
    {
    case 0: ; break;
    case 1: $('div#display-tabs').load('assets/behindcode/gym/list.php');  break;
    case 2: $('div#display-tabs').load('assets/behindcode/gym/list.php'); break;
    case 3: $('div#display-tabs').load('assets/behindcode/group/list.php');break;
    case 4: $('div#display-tabs').load('assets/behindcode/subscription/list.php');break;
    case 5: $('div#display-tabs').load('assets/behindcode/contract/list.php');break;
    case 6: $('div#display-tabs').load('assets/behindcode/contarct/list.php');break;
    case 7: $('div#display-tabs').load('assets/behindcode/worker/list.php');break;
    case 8: $('div#display-tabs').load('assets/behindcode/payment/list.php');break;
    case 9: $('div#display-tabs').load('assets/behindcode/payment/list.php');break;
    case 10: $('div#display-tabs').load('assets/behindcode/assiduity/list.php');break;
    case 11: $('div#display-tabs').load('assets/behindcode/person/list.php');break;
    }
}


function display_list(data) {
    $("div#display-tabs").html(data);
}

function display_results(data) {
    if(data == true) {
        reload_page();
    }
}