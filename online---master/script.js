
function abc(){
	let date= new Date(document.getElementById("datee").value);
	let days=["sunday","monday","tuesday","wednesday","friday","saturday","sunday"];

	var day=document.getElementById("datee").innerHTML=days[date.getDay()];
	// var year=document.getElementById("datee").innerHTML=date.getYear();
	// if (null(year)) {
	// document.write("not gotten");
	// }
	// else{
	// 	document.write("gotten");
	// }
	document.write(day);                                                                                                    
	
}

