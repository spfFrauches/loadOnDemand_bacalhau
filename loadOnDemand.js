var counterValClick = 0;

loadPlanos();
var divLoad = document.getElementById("loadDiv");
divLoad.setAttribute('style', 'visibility: hidden');

function incrementClick() {
    ++counterValClick;
    loadMorePlanos(counterValClick);
}

function loadMorePlanos(numClick) {
    
    divLoad.setAttribute('style', 'visibility: show');
    window.scrollTo(0,document.body.scrollHeight);
    setTimeout(function(){       
        var xmlhttp = new XMLHttpRequest(); 
        var lista;
        xmlhttp.open("POST", "ajax/onDemandFunctions.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
        xmlhttp.send("numClick="+numClick);
        xmlhttp.onreadystatechange = function() {        
        if (this.readyState == 4 && this.status == 200) {             
                lista = this.responseText;
                var newRow = document.getElementById("tablePlanos");
                newRow.insertAdjacentHTML("beforeend",lista); 
                window.scrollTo(0,document.body.scrollHeight);
            }        
        };
    
        divLoad.setAttribute('style', 'visibility: hidden');
    }, 500);
          
}

function loadPlanos() {
    
    var xmlhttp = new XMLHttpRequest(); 
    var lista;
    xmlhttp.open("POST", "ajax/onDemandFunctions.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
    xmlhttp.send();
    xmlhttp.onreadystatechange = function() {           
        if (this.readyState == 4 && this.status == 200) {                              
            lista = this.responseText;
            document.getElementById("tablePlanos").innerHTML = lista;
        }       
    }; 
      
}

