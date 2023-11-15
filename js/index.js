function kiemtraform() {

    let tk = document.querySelector(".email-dn");
    let mk = document.querySelector(".pass-dn");

    var format_email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    checkAccount(".email-dn", "Email", format_email);
    checkPass(".pass-dn", "Mật khẩu");

    if ((tk.value) && (mk.value)) return true;
    else return false;

}

function kiemtraformdk() {

    let sdt = document.querySelector(".sdt-dk");
    let email = document.querySelector(".email-dk");

    let pass = document.querySelector(".pass-dk");
    let repass = document.querySelector(".repass-dk");

    var format_sdt = /((0)+([0-9]{9,11})\b)/;
    var format_email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    checkAccount(".sdt-dk", "Số điện thoại", format_sdt);
    checkAccount(".email-dk", "Email", format_email);
    checkPass(".pass-dk", "Mật khẩu");
    checkRePass(".pass-dk", ".repass-dk", "Mật khẩu");

    if (
        (sdt.value) &&
        (email.value) &&
        (pass.value) &&
        (repass.value))
        return true;
    else return false;

}

function checkAccount(nameClass, text, format) {
    let Class = document.querySelector(nameClass);

    if (!Class.value) {
        Class.placeholder = "Bạn chưa nhập " + text + "!";
        return false;
    }
    else if (format.test(Class.value) == false) {
        Class.placeholder = text + " không hợp lệ!";
        Class.value = "";
        return false;
    }
    else {
        Class.placeholder = text;
        return true;
    }
}


function checkPass(nameClass, text) {
    let Class = document.querySelector(nameClass);

    if (!Class.value) {
        Class.placeholder = "Bạn chưa nhập " + text + "!";
        return false;
    }
    else {
        Class.placeholder = text;
        return true;
    }
}

function checkRePass(nameClass1, nameClass2, text) {
    let Class1 = document.querySelector(nameClass1);
    let Class2 = document.querySelector(nameClass2);

    if (Class1.value != Class2.value) {
        Class2.placeholder = "Mật khẩu không khớp!";
        Class2.value = "";
        return false;
    }
    else {
        Class2.placeholder = "Xác nhận mật khẩu";
        return true;
    }
}