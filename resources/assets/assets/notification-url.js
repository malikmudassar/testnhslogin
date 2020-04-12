

function getNotificationUrl(tag, id, uid){
    console.error("'" + tag + "'" ,"'" +id + "'" );
//    var url = window.location.protocol + "//" + window.location.hostname;
   var url = "";
    switch (tag.trim()) {
        case 'doctor_pathway':
            url += "/secure/online-cons/Online-consultations/" + uid +"?condition-id=" + id;
            break;
        case 'doctor':
            url += "/secure/appointment/appointment-detail/" + id;
            break;
        case 'doctor-order-medication':
            url += "/secure/patient/medication/medTab/" + id;
            break;
        case 'doctor_practice_change_request':
            url += "/secure/changepractice/change-detail/" + id;
            break;
        case 'doctor_practice_remove_request':
            url += "/secure/delete-practice/vdetail/" + id;
            break;
        case 'doctor_message':
            url += "/secure/message?id=" + id;
            break;
        case 'patient-profile-update':
            url += "/secure/profile/request/update/" + id;
            break;
    }
    return url;
}
