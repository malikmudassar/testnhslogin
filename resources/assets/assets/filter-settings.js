

var filter_modules = ['appointment-open','appointment-close','medication','pathways','user','patient','change_practice','remove_account'];


function saveFilterSettings(cname, data) {
//alert(data);
    data = JSON.stringify(data)
    console.log(data);
    var d = new Date();
    d.setTime(d.getTime() + (1000*60*60*24*365));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + data + ";" + expires + ";path=/";
    //alert(document.cookie)
    //console.error(document.cookie);
    //console.log("cookie", document.cookie);

}

function getFilterSettings (cname) {
    //alert(document.cookie);
    var name = cname + "=";
    var ca = document.cookie.split(';');
    var data = "";
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            data = c.substring(name.length, c.length);
        }
    }

    console.log("data", data);
    //console.error(data);
    return JSON.parse(data);
}

function resetFilterSetting(){

    $.each(filter_modules,function(index,item){
        saveFilterSettings(item,"");
    });
}