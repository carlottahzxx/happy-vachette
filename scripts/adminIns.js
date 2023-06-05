function popInput(){
    const cb = document.getElementById("admin-box");
    const div = document.getElementById('psw-admin-div');
    if(cb.checked){
        div.innerHTML = '<input type="password" id="adminPsw" placeholder="Mot de passe administrateur " name="adminpsw" required/>';
        
    }else{
        div.innerHTML = "";
    }

}