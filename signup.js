var buttom = document.getElementById("buttom").value;

function myFunction() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;


    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password;
    if (name == '' || email == '' || password == '' || contact == '') {

        document.getElementById("buttom").disabled = true;

    } else {
        // AJAX code to submit form.
        $.ajax({
            type: "POST",
            url: "includes/sigup.php",
            data: dataString,
            cache: false,
            success: function(html) {
                alert(html);
            }
        });
    }
    return false;
}