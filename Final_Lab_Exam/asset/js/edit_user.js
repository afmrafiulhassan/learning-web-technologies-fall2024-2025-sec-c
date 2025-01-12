function edit_user(event){
    event.preventDefault();
    let old_uname = document.getElementById("old_uname").value;
    let uname = document.getElementById("new_uname1").value;
    let empname = document.getElementById("new_empname1").value;
    let cmpname = document.getElementById("new_cmpname1").value;
    let contact = document.getElementById("new_contact1").value;
    let password = document.getElementById("new_password1").value;


    let xhttp = new XMLHttpRequest();
    xhttp.open("post", "../controller/edit_user_check.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("old_uname=" + old_uname + "&new_uname=" + uname + "old_empname=" + old_empname + "&new_empname=" + empname + "old_cmpname=" + old_cmpname + "&new_cmpname=" + cmpname + "old_contact=" + old_contact + "&new_contact=" + contact "&new_password=" + password );
    
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("display").innerText = this.response;
        }
    };
}