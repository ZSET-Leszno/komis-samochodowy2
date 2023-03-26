
function claser(){
    if(document.getElementById("About").value == undefined){
        document.getElementById("About").classList.add("active");
        document.getElementById("Home").classList.remove("active");
        document.getElementById("Catalog").classList.remove("active");
    }
    
    else if(document.getElementById("Home").value == undefined){
        document.getElementById("Home").classList.add("active");
        document.getElementById("About").classList.remove("active");
        document.getElementById("Catalog").classList.remove("active");

    }
}