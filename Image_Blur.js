function foods(name){
    
    var total = 0;
    
    if(document.getElementById(name).style.filter == "blur(5px)"){
        document.getElementById(name).style.filter = "blur(0px)";
        if(total>0){
            total = total - 100;//Assume each food item is 100 rupee
        }
    }else{
        document.getElementById(name).style.filter = "blur(5px)";
        total = total + 100;
    }
    
    return total;
}