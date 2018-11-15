
//gg login

var googleUser = {};
var startApp = function() {
    gapi.load('auth2', function() {
        // Retrieve the singleton for the GoogleAuth library and set up the client.
        auth2 = gapi.auth2.init({

            'client_id': '867983489373-t86imj1i7kquij3kbba0vcm1r91i6di1.apps.googleusercontent.com',
            'cookiepolicy': 'single_host_origin',
            'redirect_uri': ['http://localhost.com'],
            'response_type': 'token',
            'scope': 'https://www.googleapis.com/auth/user.phonenumbers.read',
            'include_granted_scopes': 'true',
            'state': 'pass-through value',
            'discoveryDocs': ['https://www.googleapis.com/discovery/v1/apis/drive/v3/rest']
        });
        ggreg(document.getElementById('ggRegBtn'));
        gglogin(document.getElementById('ggLogBtn'));
        // alert(attachSignin());
    });
};

function ggreg(element) {
    auth2.attachClickHandler(element, {},
        function(googleUser) {
            // document.getElementById('name').innerText = "Signed in: " + googleUser.getBasicProfile().getName();
            var profile = googleUser.getBasicProfile();
            var form = document.getElementById('ggform');
            form.setAttribute('method', 'post');

            var hiddenInputId = document.createElement('input');
            hiddenInputId.setAttribute('type', 'hidden');
            hiddenInputId.setAttribute('name', 'id');
            hiddenInputId.setAttribute('value', profile.getId());

            var hiddenInputUser = document.createElement('input');
            hiddenInputUser.setAttribute('type', 'hidden');
            hiddenInputUser.setAttribute('name', 'name');
            hiddenInputUser.setAttribute('value', profile.getName());

            var hiddenInputEmail = document.createElement('input');
            hiddenInputEmail.setAttribute('type', 'hidden');
            hiddenInputEmail.setAttribute('name', 'email');
            hiddenInputEmail.setAttribute('value', profile.getEmail());
            form.appendChild(hiddenInputId);
            form.appendChild(hiddenInputEmail);
            form.appendChild(hiddenInputUser);
            document.body.appendChild(form);
            form.submit();

        },
        function(error) {
        });
}
function gglogin(element) {
    auth2.attachClickHandler(element, {},
        function(googleUser) {
            // document.getElementById('name').innerText = "Signed in: " + googleUser.getBasicProfile().getName();
            var profile = googleUser.getBasicProfile();
            var formlogin = document.getElementById('ggloginform');
            formlogin.setAttribute('method', 'post');

            var hiddenInputId = document.createElement('input');
            hiddenInputId.setAttribute('type', 'hidden');
            hiddenInputId.setAttribute('name', 'id');
            hiddenInputId.setAttribute('value', profile.getId());

            var hiddenInputUser = document.createElement('input');
            hiddenInputUser.setAttribute('type', 'hidden');
            hiddenInputUser.setAttribute('name', 'name');
            hiddenInputUser.setAttribute('value', profile.getName());

            var hiddenInputEmail = document.createElement('input');
            hiddenInputEmail.setAttribute('type', 'hidden');
            hiddenInputEmail.setAttribute('name', 'email');
            hiddenInputEmail.setAttribute('value', profile.getEmail());

            var hiddenInputSocial = document.createElement('input');
            hiddenInputSocial.setAttribute('type', 'hidden');
            hiddenInputSocial.setAttribute('name', 'social');
            hiddenInputSocial.setAttribute('value', 'gg');

            formlogin.appendChild(hiddenInputId);
            formlogin.appendChild(hiddenInputEmail);
            formlogin.appendChild(hiddenInputUser);
            formlogin.appendChild(hiddenInputSocial);
            document.body.appendChild(formlogin);
            formlogin.submit();

        },
        function(error) {
        });
}


// fb login
window.fbAsyncInit = function() {
    FB.init({
        appId: '291498288280371',
        cookie: true,
        xfbml: true,
        version: 'v3.1'
    });

    FB.AppEvents.logPageView();

    // FB.getLoginStatus(function(response) {
    //     if (response.status === 'connected') {
    //         document.getElementById('status').innerHTML = 'Đăng ký thành công. Mời bạn đăng nhập';
    //     } else if (response.status === 'not_authorized') {
    //         document.getElementById('status').innerHTML = 'Chưa đăng nhập Facebook'
    //
    //     } else {
    //         document.getElementById('status').innerHTML = 'Bạn chưa đăng nhập Facebook';
    //     }
    // });

};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) { return; }
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



// login with facebook with extra permissions
function fbreg() {
    FB.login(function(response) {
        if (response.status === 'connected') {
            FB.api('/me', 'GET', { fields: 'first_name,last_name,name,id,email,gender' }, function(response) {
                var form = document.getElementById('fbform');
                form.setAttribute('method', 'post');

                var hiddenInputId = document.createElement('input');
                hiddenInputId.setAttribute('type', 'hidden');
                hiddenInputId.setAttribute('name', 'id');
                hiddenInputId.setAttribute('value', response.id);

                var hiddenInputUser = document.createElement('input');
                hiddenInputUser.setAttribute('type', 'hidden');
                hiddenInputUser.setAttribute('name', 'name');
                hiddenInputUser.setAttribute('value', response.name);

                var hiddenInputEmail = document.createElement('input');
                hiddenInputEmail.setAttribute('type', 'hidden');
                hiddenInputEmail.setAttribute('name', 'email');
                hiddenInputEmail.setAttribute('value', response.email);
                form.appendChild(hiddenInputId);
                form.appendChild(hiddenInputEmail);
                form.appendChild(hiddenInputUser);
                document.body.appendChild(form);
                form.submit();
            });
        } else if (response.status === 'not_authorized') {
            document.getElementById('status').innerHTML = 'We are not logged in.'

        } else {
            document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
        }
    }, { scope: 'email' });

}


function fblogin() {
    FB.login(function (response) {
        if (response.status === 'connected') {
            FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id,email,gender'}, function (response) {
                var formlogin = document.getElementById('fbloginform');
                formlogin.setAttribute('method', 'post');

                var hiddenInputId = document.createElement('input');
                hiddenInputId.setAttribute('type', 'hidden');
                hiddenInputId.setAttribute('name', 'id');
                hiddenInputId.setAttribute('value', response.id);

                var hiddenInputUser = document.createElement('input');
                hiddenInputUser.setAttribute('type', 'hidden');
                hiddenInputUser.setAttribute('name', 'name');
                hiddenInputUser.setAttribute('value', response.name);

                var hiddenInputEmail = document.createElement('input');
                hiddenInputEmail.setAttribute('type', 'hidden');
                hiddenInputEmail.setAttribute('name', 'email');
                hiddenInputEmail.setAttribute('value', response.email);

                var hiddenInputSocial = document.createElement('input');
                hiddenInputSocial.setAttribute('type', 'hidden');
                hiddenInputSocial.setAttribute('name', 'social');
                hiddenInputSocial.setAttribute('value', 'fb');


                formlogin.appendChild(hiddenInputId);
                formlogin.appendChild(hiddenInputEmail);
                formlogin.appendChild(hiddenInputUser);
                formlogin.appendChild(hiddenInputSocial);

                document.body.appendChild(formlogin);
                formlogin.submit();
            });
        } else if (response.status === 'not_authorized') {
            document.getElementById('status').innerHTML = 'We are not logged in.'

        } else {
            document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
        }
    }, {scope: 'email'});

}

// getting basic user info
function getInfo() {
    FB.api('/me', 'GET', { fields: 'first_name,last_name,name,id' }, function(response) {
        document.getElementById('status').innerHTML = response.first_name;
    });
}


