$(document).ready(function () {

});

function open_form_adding_payment (idc)
{
    load_content('div#display-tabs', 'Adding_payment.php?idc='+idc);
}

function contract_payment_for_worker(idc)
{
    $.post('assets/behindcode/payment/list_contract_for_worker.php', {idc:idc}, display_list, 'text');
}

function contract_payment (idc)
{
    $.post('assets/behindcode/payment/list_contract.php', {idc:idc}, display_list, 'text');
}

function  list_payment_in_by_manager()
{
    var idm = $("input#idcon").val();
    $.post('assets/behindcode/payment/list_in.php', {idm:idm}, display_list, 'text');
}
function  list_payment_out_by_manager()
{
    var idm = $("input#idcon").val();
    $.post('assets/behindcode/payment/list_out.php', {idm:idm}, display_list, 'text');
}
function  list_payment_in()
{
    var idg = $("input#idgym").val();
    $.post('assets/behindcode/payment/list_in_.php', {idg:idg}, display_list, 'text');
}
function  list_payment_out()
{
    var idg = $("input#idgym").val();
    $.post('assets/behindcode/payment/list_out_.php', {idg:idg}, display_list, 'text');
}
function list_payments_by_subscription(ids) {
    $.post('assets/behindcode/payment/list_by_subscription.php', {ids:ids}, display_list, 'text');
}

function consult_payment(id) {
    $("div#display-tabs").load("Consult_payment.php?id="+id);
}

function consult_payment_(id) {
    $("div#display-tabs").load("Consult_payment_.php?id="+id);
}

function delete_payment(id) {
    if(id > 0) {
        if(confirm('Are you sure you want to delete this payment?'))
        $.post('assets/behindcode/payment/delete.php', {id: id}, feedback, 'text');
    }
    else {
        alert('Select a payment please!');
    }
}

function feedback(data) {
    if(data === false) {
        window.location.href = 'message.php?cd=0&msg=FAILED';
    }
    else {
        window.location.href = 'message.php?cd=0&msg=SUCCESS';
    }
}