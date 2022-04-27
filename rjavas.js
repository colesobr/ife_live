function check() {
    if(document.getElementById('password').value ===
            document.getElementById('password2').value) {
        document.getElementById('message').innerHTML = "match";
    } else {
        document.getElementById('message').innerHTML = "no match";
    }
}