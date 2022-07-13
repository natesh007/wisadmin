var BaseURL = $("#BaseURL").val();
function ModalPopup() {
    if (document.getElementById('AppMdlHldr').getAttribute('class') == 'AppModalHldr Hide') {
        document.getElementById('AppMdlHldr').setAttribute('class', 'AppModalHldr');
    }
    else {
        document.getElementById('AppMdlHldr').setAttribute('class', 'AppModalHldr Hide');
    }
    return false;
}
function ModalPopupTwo() {
    if (document.getElementById('AppMdlHldrTwo').getAttribute('class') == 'AppModalHldr Hide') {
        document.getElementById('AppMdlHldrTwo').setAttribute('class', 'AppModalHldr');
    }
    else {
        document.getElementById('AppMdlHldrTwo').setAttribute('class', 'AppModalHldr Hide');
    }
    return false;
}
function ModalPopupThree() {
    if (document.getElementById('AppMdlHldrThree').getAttribute('class') == 'AppModalHldr Hide') {
        document.getElementById('AppMdlHldrThree').setAttribute('class', 'AppModalHldr');
    }
    else {
        document.getElementById('AppMdlHldrThree').setAttribute('class', 'AppModalHldr Hide');
    }
    return false;
}
function ModalPopupAddComplaint() {
    if (document.getElementById('AddComplaintModal').getAttribute('class') == 'AppModalHldr Hide') {
        document.getElementById('AddComplaintModal').setAttribute('class', 'AppModalHldr');
    }
    else {
        document.getElementById('AddComplaintModal').setAttribute('class', 'AppModalHldr Hide');
    }
    return false;
}
function activeinactive(MasterTable, ID, Status){
    $.post(BaseURL+"/activeinactive", {MasterTable: MasterTable, ID: ID, Status: Status}, function(data, status){
        var obj = jQuery.parseJSON(data);
        if (obj.status == 'Success')
            $("#ErrDiv").addClass('alert-success').removeClass('alert-danger');
        else
            $("#ErrDiv").addClass('alert-danger').removeClass('alert-success');
        $("#ErrDiv").html(obj.msg);
        $("#ErrDiv").show();
        setTimeout(function() {
            $("#ErrDiv").hide();
        }, 3000);
        if (obj.status == 'Success')
            window.location.href = window.location.href
    });
}
