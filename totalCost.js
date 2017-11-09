function displayCost(){/*var ddcv=document.forms["f1"]["ddcv"];
	var ddcv=f1.element["ddcv"].value;
	var res=parseInt(ddcv);
	var dtsv=parseInt(document.f1.dtsv.value);
	var bv=parseInt(document.f1.bv.value);
	var fbv=parseInt(document.f1.fbv.value);
	var dwv=parseInt(document.f1.dwv.value);
	
	var res=((ddcv*140)+(ddsv*165)+(dtsv*200)+(bv*300)+(fbv*350)+(dwv*400));
	
	*/
	var ddcv=parseFloat(document.getElementById("ddcv").value);
	var ddsv=parseFloat(document.getElementById("ddsv").value);
	var dtsv=parseFloat(document.getElementById("dtsv").value);
	var bv=parseFloat(document.getElementById("bv").value);
	var fbv=parseFloat(document.getElementById("fbv").value);
	var dwv=parseFloat(document.getElementById("dwv").value);
	//var res=ddcv*140;
	var res=((ddcv*140)+(ddsv*165)+(dtsv*200)+(bv*300)+(fbv*350)+(dwv*400));

	//var res=parseFloat(document.getElementById("cost").value);
	//cost=res;
	document.getElementById("cost").value=res;
	document.getElementById("totLabel").innerHTML=res;
	
	  
	 //var res=val1+val2+val3+val4+val5+val6; 
	//alert("Your total cost is "+res+" USD" );
}

