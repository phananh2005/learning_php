document.getElementById("form1").addEventListener("submit",function(e){
    e.preventDefault()
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let h1 = document.getElementById("h1");
    if(username == "" || password == "") {
        h1.innerText = "Nhập usernam, pass";
        h1.style.color = "red";
    } else {
        h1.innerText = "Đăng nhập thành công!";
        h1.style.color = "green";
    }
});