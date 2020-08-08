/*var contador =0;


    window.onload = function () {
    
            if(contador==0){
    
    
    document.getElementById("boton1").onclick = function () {
        contador++;
        localStorage.setItem("cont",contador);
        document.getElementById("mostrar").innerHTML = contador
    
    }}
    if(ver()>=1){
        
    
    
    document.getElementById("boton1").onclick = function () {
        contador++;
        document.getElementById("mostrar").innerHTML = ver();
        localStorage.setItem("cont",contador);
    }}
}
    
    
    function ver(){
       let conter=localStorage.getItem("cont");
        
    }*/

function clickcontador(){
    if(localStorage.clickcontador==0){
     if(typeof(Storage) != "undefined"){
        
         if(localStorage.clickcount){
            localStorage.clickcount = Number (localStorage.clickcount)+1;
            
            }else{
                localStorage.clickcount =1;
            }
            document.getElementById("resultados").innerHTML = localStorage.clickcount
     }else{
         document.getElementById("resultados").innerHTML = "error";
     }
    
}}
function clickcontadortapioca(){
         if(typeof(Storage) != "undefined"){
        
         if(localStorage.clickcounttapioca){
            localStorage.clickcounttapioca = Number (localStorage.clickcounttapioca)+1;
            
            }else{
                localStorage.clickcounttapioca =1;
            }
            document.getElementById("resultadostapioca").innerHTML = localStorage.clickcounttapioca
     }else{
         document.getElementById("resultadostapioca").innerHTML = "error";
     }
    
}
function clickcontadorfresascrema(){
    if(localStorage.clickcontadorfresascrema==0){
     if(typeof(Storage) != "undefined"){
        
         if(localStorage.clickcountfresascrema){
            localStorage.clickcountfresascrema = Number (localStorage.clickcountfresascrema)+1;
            
            }else{
                localStorage.clickcountfresascrema =1;
            }
            document.getElementById("resultadosfresascrea").innerHTML = localStorage.clickcountfresascrema
     }else{
         document.getElementById("resultadosfresascrea").innerHTML = "error";
     }
    
}}

