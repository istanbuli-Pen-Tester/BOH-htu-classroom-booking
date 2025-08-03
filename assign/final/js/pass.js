
function validatePasswords() {
    var password = document.getElementById("password").value;
    var repassword = document.getElementById("repassword").value;

    if (password !== repassword) {
        alert("Passwords do not match. Please try again.");
        return false;
    }
    return true; 
}
