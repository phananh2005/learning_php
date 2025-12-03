document.getElementById("form1").addEventListener("submit",function(e){
    const ten = document.getElementById("NhapTen");
    const hoDem = document.getElementById("HoDem");
    const email = document.getElementById("email");
    const sdt = document.getElementById("sdt");
    let thanhPho = document.getElementById("sel_ThanhPho").value;
    let tinh = document.getElementById("sel_Tinh").value;
    let ghiChu = document.getElementById("ta_GhiChu").value;
    alert("Tên: " + ten.value + "\nHọ Đệ: " +   hoDem.value +"\nEmail: "
        + email.value + "\nSDT: "+ sdt.value + "\nThanh pho: "+ thanhPho + "\nTỉnh: "+ tinh + "\nGhi chú: "+ ghiChu); 
});