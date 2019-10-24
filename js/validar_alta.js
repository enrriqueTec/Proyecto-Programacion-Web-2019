$(document).ready(function () {
    $('#modalNuevo').validate({
        rules: {
            userName: { required: true },
            pass: {
                required: true,
                minlength: 5
            },
            passConfir: {
                required: true,
                minlength: 5,
                equalTo: "#pass"
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            userName: {
                required: "Please write a user name...",
            },
            pass: {
                required: "Please write a password...",
                minlength: "Password must have at least 5 characters...",
            },
            passConfir: {
                required: "Please write a password...",
                minlength: "Password must have at least 5 characters...",
                equalTo: "Password must match...",
            },
            email: {
                required: "Please write an email...",
                email: "Format must be: example@domain.com",
            }
        },
        submitHandler: function (form) {
            register();
        }
    });
});


function register() {
    alert("Account created!!");
}
.error {
  color: red;
}