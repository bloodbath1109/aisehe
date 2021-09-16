const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "admin" && password === "admin"){
        alert("Login successfully.");
        location.reload();
    }else if(username==="" && password==="admin"){
        alert("Email is required!!!");
        location.reload();
    }else if(username==="admin" && password===""){
        alert("Password is required!!!");
        location.reload();
    }
    else {
        loginErrorMsg.style.opacity = 1;
    }
})