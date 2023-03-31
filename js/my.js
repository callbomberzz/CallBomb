
var checkforl = true;
function callwarn(inp, cont) {
    var box2show = document.getElementById('warncontent0');
    var boxcontent = document.getElementById('warncontent');

    if (inp == 1 && window.checkforl == true) {
        boxcontent.innerHTML = cont;
        box2show.style.right = '10px';
        window.checkforl = false;
        console.log(window.checkforl);
        window.warntime = setTimeout(function () { callwarn(0, ''); }, 5000);
    } else if (inp == 0) {
        window.checkforl = true;
        box2show.style.right = '-400px';
        console.log(window.checkforl);
    } else if (inp == 2) {
        clearTimeout(window.warntime);
        boxcontent.innerHTML = cont;
        box2show.style.right = '10px';
        window.checkforl = false;
        console.log(window.checkforl);
        setTimeout(function () { callwarn(0, ''); }, 5000);
    }

}
var checkedcap = false;
function recaptchaCallback() {
    var button2e = document.getElementById('submitcall');
    button2e.classList.remove('disabled');
    // button2e.disabled = false;
    window.checkedcap = true;
}

function chechcallform() {
    var button2e = document.getElementById('submitcall');

    if (document.getElementById('country-code').value == null || document.getElementById('country-code').value == undefined || document.getElementById('country-code').value.length < 1) {
        callwarn(1, "Please Fill The Country Code");
        return false;
    } else if (document.getElementById('mobile-number').value == null || document.getElementById('mobile-number').value == undefined || document.getElementById('mobile-number').value.length < 6) {
        callwarn(1, "Please Fill The Mobile Number");
        return false;

    } else if (document.getElementById('g-recaptcha-response').value == null || document.getElementById('g-recaptcha-response').value == undefined || document.getElementById('g-recaptcha-response').value.length < 10) {
        callwarn(1, "please fill the captcha first");
        return false;

    } else {
        return true;
    }


}
function checkcontactform() {

    if (document.getElementById('form-name').value == null || document.getElementById('form-name').value == undefined || document.getElementById('form-name').value.length < 1) {
        callwarn(1, "Please Fill The First Name");
        return false;
    } else if (document.getElementById('form-email').value == null || document.getElementById('form-email').value == undefined || document.getElementById('form-email').value.length < 1) {
        callwarn(1, "Please Fill The  TELEGRAM username / Email id");
        return false;

    } else if (document.getElementById('g-recaptcha-response').value == null || document.getElementById('g-recaptcha-response').value == undefined || document.getElementById('g-recaptcha-response').value.length < 10) {
        callwarn(1, "please fill the captcha first");
        return false;

    } else if (document.getElementById('form-subject').value == null || document.getElementById('form-subject').value == undefined || document.getElementById('form-subject').value.length < 1) {
        callwarn(1, "please fill the Subject");
        return false;

    } else if (document.getElementById('form-message').value == null || document.getElementById('form-message').value == undefined || document.getElementById('form-message').value.length < 10) {
        callwarn(1, "please fill the Message Box");
        return false;

    } else {
        return true;
    }


}

function callnow(fnum) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState === 4) {
            if (xmlHttp.status === 200) {
                var jsonResponse = JSON.parse(xmlHttp.responseText);

                if (jsonResponse.success == true) {
                    document.getElementById('succall').innerHTML = Number(document.getElementById('succall').innerHTML) + 1;
                    // alert(Number(document.getElementById('succall').innerHTML));
                    console.log(jsonResponse.num);
                } else {
                    document.getElementById('failcall').innerHTML = Number(document.getElementById('failcall').innerHTML) + 1;
                    console.log(jsonResponse.reason);
                    alert(jsonResponse.reason);
                }
                setTimeout(function () { callnow(fnum + 1); }, 2000);
                // callnow(fnum + 1);
            } else {
                console.log("Error", "unable to connect to the server");
                confirm("unable to connect to the server, make sure you are connected to a good internet connection.");
                callnow(fnum);
            }
        }
    };
    xmlHttp.open("GET", "/callapis.php?fnum=" + fnum, false);
    xmlHttp.send(null);

}

var perfEntries = performance.getEntriesByType("navigation");

if (perfEntries[0].type === "back_forward") {
    location.reload(true);
}