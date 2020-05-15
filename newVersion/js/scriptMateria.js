function fillTable() {
    
    var tabella = "";
  
   for(var i=0;i<=10;i++)
        {
    tabella += "<tr id='cellaTutor'>";
	tabella += "<td class='NomeStyle'>";
	
	tabella += "<p style='font-size:18px;'>";
	tabella +="NOME COGNOME";  
	tabella += "</p>";
	
	tabella += "<p style='font-size:18px;'>";
	tabella+="CLASSE";  
	tabella += "</p>";

	tabella += "<p style='font-size:18px;'>";
	tabella+="VALUTAZIONE";  
	tabella += "</p>";
	
	tabella += "</td>";
	tabella += "<td class='ConfermaStyle'>";
	
	tabella += "<input type='button' class='slButtons' value='CONTATTA'>";
	
	tabella += "</td>";
	tabella += "</tr>";
        }
    document.getElementById("Tabella").innerHTML = tabella;
}


//DEMO: funzione di visualizzazione del valore corrente dello slider
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}