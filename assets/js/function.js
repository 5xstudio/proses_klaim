function doLogin() {
    let username = $("#username").val();
    let password = $("#password").val();
    $.ajax({
        url: 'function.php',
        data: {
            u: username,
            p: password,
            type: 'login'
        },
        dataType: 'json',
        type: 'POST',
        cache: false,
        success: function (response) {
            alert(response.message)
            location.reload()
        },
        error: function () {
            alert('Terjadi Kesalahan');
        }
    });
}