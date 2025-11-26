// alert('Hello');
// let nhom={
//     ten:"Nhóm 12",
//     tenThanhVien:["phan anh","nam","minh","đức"]
// };
// for(let i in nhom.tenThanhVien){
//     console.log(nhom.tenThanhVien[i])
// }


// document.getElementById("btnTest").onclick = function(){
//     alert("kich hoạt");
// };
                document.getElementById("form1").addEventListener("submit",function(event){
                    let name = document.getElementById("name").value;
                    if(name === ""){
                        alert("Vui long nhập tên");
                        event.preventDefault();
                    }
                });