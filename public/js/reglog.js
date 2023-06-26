$("#reg-btn").on("click", () => {
    $.ajax({
        url: "registration.php", 
        type: "POST",
        data: {
            name: $("#reg-login").val(),
            password: $("#reg-password").val()
        },
        success: function(response) {
            if(response == true)
            {
                $(".warning-box-reg").html("Регистрация прошла успешна");
            }
            else
            {
                $(".warning-box-reg").html("Данный аккаунт уже существует");
            }
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
});

$("#log-btn").on("click", () => {
    $.ajax({
        url: "login.php", 
        type: "POST",
        data: {
            name: $("#login-log").val(),
            password: $("#password-log").val()
        },
        success: function(response) {
            if(response == true)
            {
                location.reload();
            }
            else
            {
                $(".warning-box-log").html("Данные введены плохо");
            }
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
});