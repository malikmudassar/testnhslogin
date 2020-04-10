

;(function ($, document, window) {
    'use strict';

    $.fn.timeout = function(opts){
    var defaults = {
        reset: false,
        timeout_sec: 10,
        logouturl: null,
        redirecturl: null,
        debug: false,
    };

    var options = $.extend(defaults, opts || {});
    var last_activity, timeout, time_count, now, pending_Request;
    var localStorageResetInterval = 60 * 60 * 1000;
    var sessionKey = "activity_key";

    var init = function() {
        if(options.debug){
            console.log("Timeout init");
        }
        last_activity = getCookie(sessionKey);
        var now = new Date().getTime() / 1000;

        console.log("init last_activity" , last_activity);
        if(last_activity == null || last_activity  == 0){
            if(options.debug){
                console.log("no last_activity");
            }
            resetTimer();
        }

        if(options.debug) {
            console.log("now, last_activity ", now, last_activity, parseInt(now - last_activity));
        }
       // return;

        if(now - last_activity > options.timeout_sec ){
            if(options.debug) {
                console.log("Already logout");
            }
            logout();
            return;
        }
        resetTimer();
        $(document).on('click mousemove mousedown keyup scroll keypress', function () {
            resetTimer();
        });
        window.onmousemove = resetTimer;
        window.onmousedown = resetTimer;
        window.onclick = resetTimer;
        window.onscroll = resetTimer;
        window.onkeypress = resetTimer;

        setInterval(function(){
            if(options.reset){
                resetTimer();
            }else{
                updateTimer()
            }
        }, 5000);
    };
    var resetTimer = function() {
        if(options.debug) {
            console.log("Rest Timer");
            console.log("updateTimer", last_activity);
        }
        last_activity = new Date().getTime() / 1000;
        setCookie(sessionKey, last_activity, 10);
        updateTimer();
    }
    var updateTimer = function () {


        var now = new Date().getTime() / 1000;
        if(options.debug) {
            console.log("now, last_activity ", now, last_activity, parseInt(now - last_activity));
        }
        if(now - last_activity > options.timeout_sec ){
            if(options.debug) {
                console.log("Logout from update timer");
            }
//            setCookie(sessionKey, now, 10);
            logout();
        }
    }

    var logout = function(){

        var last_time = getCookie(sessionKey);
        if(options.debug) {
            console.log("last_activity < last_time", last_activity < last_time, last_time, last_activity);
        }
        if(last_activity < last_time){
            if(options.debug) {
                console.log("Updated time from another tab");
            }
            last_activity = last_time;
            return;
        }
        if(options.debug) {
            console.log("Logging Out");
        }
        if (!options.logouturl) {
            if(options.debug)
                console.log("Logout now for no activity");
            return;
        }
        if(!pending_Request){
            pending_Request = $.get(options.logouturl,null,function(){
                setCookie(sessionKey,new Date().getTime() / 1000,10);

                setTimeout(function () {
                    if (options.redirecturl) {
                        window.location = options.redirecturl;
                    }
                }, 1000)
            }).fail(function(err) {
                pending_Request = false;
                if(options.debug) {
                    console.log("err", err);
                }
            });
        }
    }
    var setCookie = function (cname, cvalue, exdays) {

        if(options.debug) {
            console.log("Setting Cookie");
        }
        var d = new Date();
        d.setTime(d.getTime() + (localStorageResetInterval));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    var getCookie = function (cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');

        if(options.debug) {
            console.log(ca);
        }

        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return null;
    }
    return this.each(function () {
        init();

    });


};
}(jQuery, document, window));
