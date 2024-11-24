function validateForm() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    
    if (username === "" || password === "") {
        alert("Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.");
        return false;
    }
    return true;
}
