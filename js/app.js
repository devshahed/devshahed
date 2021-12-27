let sidebar = document.getElementById("sidebar");

function sidebarShow(){
    if(sidebar.classList.contains("sidebar")){
        sidebar.classList.remove("sidebar");
    }else{
        sidebar.classList.add("sidebar");
    }
}

let category = document.getElementById("category");
category.style.display = "none";
category.style.opacity = "0";
function dropdown(){
    if(category.style.display == "none"){
        category.style.display = "flex";
        setTimeout(()=>{
            category.style.opacity = "1";
        },10);
    }else{
        category.style.display = "none";
        setTimeout(()=>{
            category.style.opacity = "0";
        },10);
    }
}
